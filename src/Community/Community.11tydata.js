// When the forum software is installed at /Community, set "communityLive": true in
// src/_data/site.json. This placeholder is then left out of the build so its
// index.html can't shadow the forum's index.php on the server.
export default {
  eleventyComputed: {
    permalink: (data) => (data.site.communityLive ? false : "/Community/"),
  },
};
