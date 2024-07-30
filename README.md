# Craft Challenge

## Tasks

- [ ] Add an RSS feed for the news section
- [ ] Add a new block to the content builder matrix field to support YouTube videos. They should input a YouTube ID in the CMS. Update the frontend to output that YouTube embed with a responsive (16:9 ratio) video player.
- [ ] Update Tailwind to have the Tailwind containers plugin installed, and set it so once the container is 600px wide, the H1 on the homepage becomes the serif font stack.

## Installing

- Install DDEV, if you use Mac and don't have a Docker environment consider installing OrbStack - it's just easier!
- Startup DDEV `ddev start`
- Install packages `ddev composer install`
- Install Craft `ddev craft install`
- Install Yarn dependencies `ddev yarn install`
- Run the Vite dev sever `ddev yarn dev`
- Access via https://challenge.ddev.site/ and https://challenge.ddev.site/admin

## Assets

- Run `ddev yarn dev` to run dev mode. Be sure to have Craft in dev mode too so it looks for the dev server
- Run `ddev yarn build` when ready to build the production assets. The deployment server should be set up to do this automatically in production.

## Performance

The website uses Blitz for caching Craft CMS. This renders the website as static HTML files to improve the performance
of the website and reduce the load on the server, and thus energy usage of the website.

## Need any help?

If you need any help with the website, please contact us at [hello@mutual.agency](mailto:hello@mutual.agency)
