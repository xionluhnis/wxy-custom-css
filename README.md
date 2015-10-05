# wxy-custom-css
Custom CSS plugin to create custom styles for specific
pages while using a single theme.

## How it works

Generate the twig variable `custom_css` with the path
to a custom css file in case one is found by

1. Looking at the current file target, with extension .css
2. Going down the path tree, looking for `style.css`

If any is found, the variable `custom_css` is set to the
path of that file.

## Configuration
None

## License
MIT License
