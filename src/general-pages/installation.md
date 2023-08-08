---
title: Installation
tags: top
eleventyNavigation:
  parent: DesModder
  key: Installation
  order: 0
---

## Preferred: Install from Webstore

You can install the stable version of DesModder [directly from the Chrome Web Store](https://chrome.google.com/webstore/detail/desmodder-for-desmos/eclmfdfimjhkmjglgdldedokjaemjfjp) or [from the Firefox Web Store](https://addons.mozilla.org/en-US/firefox/addon/desmodder-for-desmos/).

DesModder is currently only supported for Google Chrome, Chromium-based browsers such as Opera, Brave, and Vivaldi, and Firefox (or Firefox based browsers).

The extension updates every few weeks (see DesModder releases page for a history).

---

## Advanced: Install from ZIP

To install versions that are not available on the Chrome or Firefox web stores, first download the correct version as a ZIP file, then install it.

### Download

Sometimes the Chrome web store takes a few days to approve new extension releases. To download the latest stable release:

1. Open [DesModder Releases](https://github.com/DesModder/DesModder/releases)
2. Download `DesModder-Chrome-[version].zip` (for Chrome or Chromium-based browsers) or `DesModder-Firefox-[version].zip` (for Firefox).

Nightly pre-release builds are available to try the latest features as they are added. Warning: there may be issues with these versions. Take care. To download nightly releases:

1. Navigate to [the nightly builds page](https://nightly.link/DesModder/DesModder/workflows/build/main).
2. Click the link in the **right** column corresponding to your browser. Chrome builds start with "DesModder-Chrome", and Firefox builds start with "DesModder-Firefox"

### Install (Chrome and Other Browsers)

To install your downloaded `DesModder-Chrome-[version].zip`:

3. Unzip (extract) the downloaded zip file to a folder
4. Navigate to `chrome://extensions`
5. Enable "Developer mode" (top-right)
6. Click "Load unpacked"
7. Select the unzipped folder
8. If you already have DesModder from the webstore, **disable** that version.
   The prerelease version will have a red dot by its logo.

If you get the error "Manifest file is missing or unreadable" in step 5, make sure you selected the folder itself and not a folder containing it.
The correct folder will have a file called `manifest.json` directly inside.

![Labelled extensions page](./prerelease-chrome.png)

### Install (Firefox)

To install your downloaded `DesModder-Firefox-[version].zip`:

3. Navigate to `about:debugging`
4. Choose "This Firefox" on the left
5. Click "Temporary Extensions"
6. Click "Load Temporary Add-on"
7. Select the downloaded zip file (do not extract).

![Labelled debugging page](./prerelease-firefox.png)
