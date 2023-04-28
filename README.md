# TASK 7

## Regex

These are specific templates for finding, replacing, and processing text

## Regex methods:

- preg_match($pattern, $subject, &$matches) - searches for the first occurrence of the pattern in the string and saves the matches in an array of matches
- preg_match_all($pattern, $subject, &$matches) - searches for all occurrences and saves them into an array, returns the number of matches
- preg_replace($pattern, $replacement, $subject) - replaces all occurrences of the pattern in the string by a replay
- preg_split($pattern, $subject) - breaks the string using pattern as a separator
