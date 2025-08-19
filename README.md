# ot-sitekit-ce-textmedia

This TYPO3 extension provides a content element that displays an image next to
a text. On small screen resolutions, the image is always displayed above the
text, regardless of whether the image is displayed on the left or right at
high resolutions. Buttons can be added as IRRE elements.

It is part of the TYPO3 Sitekit ecosystem.

## Requirements

- TYPO3 v13.4 or newer
- [oliverthiele/ot-sitekit-base](https://packagist.org/packages/oliverthiele/ot-sitekit-base)
- [oliverthiele/ot-irrebuttons](https://packagist.org/packages/oliverthiele/ot-irrebuttons)

## Features

- Adds a content element for an image next to a text
- Integrates button management below the text using `ot-irrebuttons`
- Compatible with the `lib.sitekitContentElement` rendering structure from `ot-sitekit-base`

## Installation

```bash
composer require oliverthiele/ot-sitekit-ce-textmedia
```

## TypoScript Integration

Make sure to include the TypoScript set from this extension in your sitepackage.
For example, in your `my-sitepackage/Configuration/Sets/Main/config.yaml` file
(or wherever your sitepackage manages dependencies):

```yaml
name: example/my-sitepackage

dependencies:
- typo3/fluid-styled-content
- oliverthiele/ot-sitekit-base
# …
- oliverthiele/ot-sitekit-ce-textmedia
```

## License

GPL-2.0-or-later
