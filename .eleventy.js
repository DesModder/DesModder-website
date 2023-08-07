module.exports = function (eleventyConfig) {
  eleventyConfig.addPassthroughCopy("./src/css");
  eleventyConfig.addWatchTarget("./src/css/");
  eleventyConfig.addPassthroughCopy({
    "./img/favicon/*.{png,ico,webmanifest}": "/",
  });
  return {
    dir: {
      input: "src",
      output: "public",
    },
  };
};
