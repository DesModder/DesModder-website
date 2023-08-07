const eleventyNavigationPlugin = require("@11ty/eleventy-navigation");

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
  eleventyConfig.addPlugin(eleventyNavigationPlugin);
  return {
    dir: {
      input: "src",
      output: "public",
    },
  };
};
