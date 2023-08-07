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
  return {
    dir: {
      input: "src",
      output: "public",
    },
  };
};
