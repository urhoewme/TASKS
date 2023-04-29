<?php
class Point
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function __toString()
    {
        return "({$this->x},{$this->y})";
    }
}
class Matrix
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function isAccessible($point)
    {
        if ($point->x < 0 || $point->y < 0 || $point->x >= count($this->data) || $point->y >= count($this->data[0])) {
            return false;
        }
        return $this->data[$point->x][$point->y] == 0;
    }
    public function getNeighbors($point)
    {
        $neighbors = [];
        $dx = [-1, 0, 1, 0];
        $dy = [0, 1, 0, -1];
        for ($i = 0; $i < 4; $i++) {
            $neighbor = new Point($point->x + $dx[$i], $point->y + $dy[$i]);
            if ($this->isAccessible($neighbor)) {
                $neighbors[] = $neighbor;
            }
        }
        return $neighbors;
    }
    public function saveToFile($filename)
    {
        $data = serialize($this->data);
        file_put_contents($filename, $data);
    }
    public static function loadFromFile($filename)
    {
        $data = file_get_contents($filename);
        return new Matrix(unserialize($data));
    }
}
function bfs($matrix, $start, $end)
{
    $queue = [];
    $visited = [];
    $queue[] = [$start, []];
    while (!empty($queue)) {
        $current = array_shift($queue);
        $point = $current[0];
        $path = $current[1];
        if ($point->x == $end->x && $point->y == $end->y) {
            return $path;
        }
        if (isset($visited[(string)$point])) {
            continue;
        }
        $visited[(string)$point] = true;
        $neighbors = $matrix->getNeighbors($point);
        foreach ($neighbors as $neighbor) {
            $newPath = array_merge($path, [$neighbor]);
            $queue[] = [$neighbor, $newPath];
        }
    }
    return null;
}
$data = [
    [0, 1, 1, 0, 0, 0, 0, 1, 0, 0],
    [0, 0, 0, 0, 1, 1, 0, 1, 0, 0],
    [1, 1, 1, 1, 1, 1, 0, 1, 0, 0],
    [0, 0, 0, 0, 0, 1, 0, 1, 1, 1],
    [0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
    [0, 0, 0, 0, 0, 1, 1, 1, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 1, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 1, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
];
$matrix = new Matrix($data);
$start = new Point(0, 0);
$end = new Point(9, 9);
$path = bfs($matrix, $start, $end);
if ($path === null) {
    echo "Путь не найден.";
} else {
    echo "Кратчайший путь: " . implode("->", $path);
}
$matrix->saveToFile("matrix.dat");
$loadedMatrix = Matrix::loadFromFile("matrix.dat");
