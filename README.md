# OT SiteKit CE Textmedia — TYPO3 Content Element

TYPO3 content element that renders an image alongside text in configurable
split layouts for TYPO3 v13 and v14. Part of the OT SiteKit ecosystem.

[![TYPO3](https://img.shields.io/badge/TYPO3-13.4%20%7C%2014.3-orange.svg)](https://typo3.org/)
[![Packagist Version](https://img.shields.io/packagist/v/oliverthiele/ot-sitekit-ce-textmedia.svg)](https://packagist.org/packages/oliverthiele/ot-sitekit-ce-textmedia)
[![PHP](https://img.shields.io/packagist/dependency-v/oliverthiele/ot-sitekit-ce-textmedia/php.svg)](https://php.net/)
[![License](https://img.shields.io/packagist/l/oliverthiele/ot-sitekit-ce-textmedia.svg)](LICENSE)
[![Changelog](https://img.shields.io/badge/Changelog-CHANGELOG.md-blue.svg)](CHANGELOG.md)

---

## Features

- **7 layout modes** — Media top (full width), media left (50/33/25 %), media
  right (50/33/25 %)
- **Responsive stacking** — On small screens, the image always appears above the
  text regardless of desktop layout
- **Multi-column text** — Optional CSS column layout for body text
- **Button integration** — IRRE button rows below the text via `ot-irrebuttons`
- **FSC-compatible header** — Uses `Header/All` partial (same as
  FluidStyledContent), rendered via `ot-ceheader`
- **Backend preview** — Content element preview in the page module via
  `GenericPreviewRenderer`
- **SiteKit integration** — Ships with `SiteKit.yaml` for automatic grid
  registration (`minCols: 3`)
- **Bootstrap 5** — Templates use Bootstrap 5 grid and utility classes
- **SiteSet** — TypoScript is provided as a TYPO3 v13 SiteSet; no manual
  TypoScript includes required

---

## Requirements

| Requirement                                                                                 | Version           |
|---------------------------------------------------------------------------------------------|-------------------|
| TYPO3                                                                                       | `^13.4 \| ^14.3`  |
| PHP                                                                                         | `>=8.3`           |
| Bootstrap                                                                                   | 5.x               |
| [oliverthiele/ot-sitekit-base](https://packagist.org/packages/oliverthiele/ot-sitekit-base) | `*`               |
| [oliverthiele/ot-ceheader](https://packagist.org/packages/oliverthiele/ot-ceheader)         | `*`               |
| [oliverthiele/ot-irrebuttons](https://packagist.org/packages/oliverthiele/ot-irrebuttons)   | `^4.0`            |

---

## Installation

```bash
composer require oliverthiele/ot-sitekit-ce-textmedia
```

---

## Configuration

### 1. Add SiteSet dependency

Include the SiteSet in your sitepackage's `config.yaml`:

```yaml
name: vendor/my-sitepackage

dependencies:
    - typo3/fluid-styled-content
    - oliverthiele/ot-sitekit-base
    - oliverthiele/ot-ceheader
    - oliverthiele/ot-irrebuttons
    - oliverthiele/ot-sitekit-ce-textmedia
```

### 2. SiteSet settings (optional)

| Setting                              | Default | Description                                                                                                               |
|--------------------------------------|---------|---------------------------------------------------------------------------------------------------------------------------|
| `otSitekitCeTextmedia.verticalAlign` | `false` | Vertically center the text column when the image is taller than the text (adds `align-items-center` to the Bootstrap row) |

### 3. Template overrides (optional)

Override templates via TypoScript in your sitepackage:

```typoscript
tt_content.ot_sitekitcetextmedia {
    templateRootPaths.20 = EXT:your_sitepackage/Resources/Private/Templates/
    partialRootPaths.20  = EXT:your_sitepackage/Resources/Private/Partials/
    layoutRootPaths.20   = EXT:your_sitepackage/Resources/Private/Layouts/
}
```

---

## Layouts

| Value                | Description              |
|----------------------|--------------------------|
| `100-media-100-text` | Media top, full width    |
| `50-media-50-text`   | Media left, 50 % / 50 %  |
| `33-media-66-text`   | Media left, 33 % / 66 %  |
| `25-media-75-text`   | Media left, 25 % / 75 %  |
| `50-text-50-media`   | Media right, 50 % / 50 % |
| `66-text-33-media`   | Media right, 66 % / 33 % |
| `75-text-25-media`   | Media right, 75 % / 25 % |

---

## License

GPL-2.0-or-later — see [LICENSE](LICENSE)

## Author

Oliver Thiele — [oliver-thiele.de](https://www.oliver-thiele.de)
