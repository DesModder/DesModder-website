module.exports = {
  siteMetadata: {
    title: "DesModder",
    titleTemplate: "%s",
    description:
      "DesModder is an extension to supercharge your Desmos graph experience.",
    url: `https://desmodder.com`, // No trailing slash allowed!
    siteUrl: `https://desmodder.com`,
  },
  plugins: [
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        path: `${__dirname}/src/pages/`,
      },
    },
  ],
};
