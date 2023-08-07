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

<br>

## Advanced: Latest Stable Build

Sometimes the chrome web store takes a few days to approve new extension releases, where hotfixes that have yet to be applied might cause Desmos to not load. You can install a recent stable release from the following driections.

**Chrome**: Go to [Releases](https://github.com/DesModder/DesModder/releases), download the latest dist-chrome.zip and unzip the file. Then go to `chrome://extensions` in the browser address bar, and enable Developer Mode. Select load unpacked, find and select your unzipped folder of the extension, and click open.

**Firefox**: Go to [Releases](https://github.com/DesModder/DesModder/releases), download the latest dist-ff.zip. Then go to `about:addons` in the browser address bar. Click the cogwheel to the right of Manage Your Extensions, find and select dist-ff.zip, and click open.

## Advanced: Latest Nightly Build

Pre-release builds are your quickest way to new features. Warning: there may be issues with these versions. Take care.

If you want to get new features even earlier, follow the instructions in [Run Prerelease](/docs/RUN_PRERELEASE.md), keeping in mind these may not always work at all times.

### Download

The first step is to identify which build you want to download.
If you're here, you probably want the most recent version.
If you were linked to a specific download, you can skip to step 3 using the downloaded file.

1. Navigate to [the nightly builds page](https://nightly.link/DesModder/DesModder/workflows/build/main).

2. Click the link in the **right column** corresponding to your browser. Chrome builds start with "DesModder-Chrome", and Firefox builds start with "DesModder-Firefox"

If you are using a browser that isn't Chrome or Firefox or you aren't sure what to use, choose Chrome.

### Install (Chrome/Other Browsers)

3. Unzip (extract) the downloaded zip file to a folder
4. Navigate to chrome://extensions
5. Enable "Developer mode" (top-right)
6. Click "Load unpacked"
7. Select the unzipped folder
8. If you already have DesModder from the webstore, **disable** that version.
   The prerelease version will have a red dot by its logo.

![Labelled extensions page](./prerelease-chrome.png)

> If you get the error "Manifest file is missing or unreadable" in step 5, make sure you selected the folder itself and not a folder containing it.
> The correct folder will have a file called `manifest.json` directly inside.

### Install (Firefox)

3. Navigate to about:debugging
4. Choose "This Firefox" on the left
5. Click "Temporary Extensions"
6. Click "Load Temporary Add-on"
7. Select the downloaded zip file (do not extract).

![Labelled debugging page](./prerelease-firefox.png)
