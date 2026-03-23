# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.3.0] — 2026-03-23

### Added
- Pass `video` variable to `Media/Media` partial to enable the Video Atom (`skc:atom.video`)

### Changed
- Fixed argument syntax: `parentElements : parentElements` → `parentElements: parentElements` (consistent `key: value` style)

## [1.2.0] — 2026-03-16

### Added
- Backend preview renderer via `GenericPreviewRenderer` from `ot-sitekit-base`
- SiteSet setting `otSitekitCeTextmedia.verticalAlign` (default: `false`) — adds `align-items-center` to the Bootstrap row in all side-by-side layouts to vertically center the text column when the image is taller

### Changed
- Header partial changed from `Header` to `Header/All` for FluidStyledContent compatibility
- Added `oliverthiele/ot-ceheader` as required dependency (provides `Header/All` partial)

## [1.1.2] — 2025-03-01

### Added
- SiteKit configuration (`SiteKit.yaml`) for automatic grid registration (`minCols: 3`, groups: `group_content_wide`, `group_content_small`)

## [1.1.1] — 2025-02-01

### Changed
- Removed `<f:section>` wrapper from header partial call for better FluidStyledContent compatibility

## [1.1.0] — 2025-01-01

### Added
- `gridColumns` argument passed to header partial for correct image size calculation per layout
- New layout modes: 33/66 and 25/75 splits for media left and media right
- Multi-column text support via `ot_text_columns` field

### Changed
- Configuration for text/media component moved to dedicated TypoScript set

## [1.0.0] — 2024-01-01

### Added
- Initial release
- Content element `ot_sitekitcetextmedia` with media top, media left (50 %), and media right (50 %) layouts
- Crop variant palette support
- IRRE button integration via `ot-irrebuttons`
- Bootstrap 5 templates
- TYPO3 v13 SiteSet