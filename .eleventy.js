const eleventyNavigationPlugin = require("@11ty/eleventy-navigation");
const syntaxHighlightPlugin = require("@11ty/eleventy-plugin-syntaxhighlight");

module.exports = function (eleventyConfig) {
  eleventyConfig.addWatchTarget("./src/**");
  eleventyConfig.addWatchTarget("./img/**");
  eleventyConfig.addPassthroughCopy("./src/css");
  eleventyConfig.addPassthroughCopy({
    "./img/favicon/*.{png,ico,webmanifest}": "/",
  });
  eleventyConfig.addPassthroughCopy("./img/*.png");
  eleventyConfig.addPassthroughCopy({
    "./src/general-pages/installation/*.png": "/installation",
  });
  // do not place syntaxHighlightPlugin after eleventyNavigationPlugin
  // it prevents styles from loading
  eleventyConfig.addPlugin(syntaxHighlightPlugin);
  eleventyConfig.addPlugin(eleventyNavigationPlugin);
  return {
    dir: {
      input: "src",
      output: "public",
    },
  };
};
