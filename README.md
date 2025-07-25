# 🧪 HTMX-PHP Logic Trainer

This is a personal playground and reference set to explore the features of [HTMX](https://htmx.org/) using PHP as the backend.

Inspired by curiosity and a desire to "swim into" HTMX, this mini-project will serve as a growing collection of examples demonstrating specific HTMX attributes and behaviors.

Because most (or maybe some) of us grew up building traditional MPA flows. Shifting to HTMX's minimal requests and DOM swapping feels like 'unlearning gravity'.

I am looking for some examples using PHP but i find little and htmx feels a little different, so i hope this would help sort out some of HTMX features using PHP, this would also help future me and the other 'similar' me people, HAHA. 

## How it Works

Each example:
- Is linked from the main `index.php`
- Demonstrates a specific HTMX feature.
- Uses only PHP + HTMX, and some javascript.
- Is made as simple as possible. Just to grasp the idea.

## Example List

| Feature | Page | Description |
|--------|------|-------------|
| hx-swap-oob | [`swap-oob.php`](examples/swap-oob.php) | Update a part of the DOM that isn’t the target |
| hx-indicator | [`indicator.php`](examples/indicator.php) | Show a loading animation while request is pending |
| hx-get vs hx-post | [`get-vs-post.php`](examples/get-vs-post.php) | See how different HTTP methods behave |
| Fragment loading | [`fragment-load.php`](examples/fragment-load.php) | Load partial responses dynamically |
| hx-trigger (keyup) | [`trigger-custom.php`](examples/trigger-custom.php) | Auto-search while typing |
| hx-include | [`include-extra.php`](examples/include-extra.php) | Submit multiple fields |
| hx-confirm | [`confirm-action.php`](examples/confirm-action.php) | Prompt before action |
| Polling | [`polling.php`](examples/polling.php) | Auto update every few seconds |
| hx-push-url | [`push-url.php`](examples/push-url.php) | Dynamic URL updates |
| hx-swap modes | [`swap-modes.php`](examples/swap-modes.php) | Visual DOM insertion styles |
| htmx:afterSwap | [`afterswap.php`](examples/afterswap.php) | fires a little earlier vs. afterSettle, good for logic, not always ideal for visual transitions. |
| htmx:afterSettle | [`aftersettle.php`](examples/aftersettle.php) | Add animation or logic after DOM update |
| Inline editing (PATCH) | [`inline-edit.php`](examples/inline-edit.php) | n.a. |
| Tabs via HTMX | [`tabs.php`](examples/tabs.php) | Tabs via HTMX |
| Chained dropdowns | [`chained-select.phpp`](examples/chained-select.php) | n.a. |
| Paginated fruits list | [`pagination.php`](examples/pagination.php) | Load 5 items at a time |
| Loading spinner | [`spinner-delay.php`](examples/spinner-delay.php) | Loading spinner (delayed) |
| HTMX Slideshow | [`slideshow.php`](examples/slideshow.php) | Load slides from folder for presentations |

these are just some of the examples, I have added some more and i will keep on updating this README.md 

## Requirements

- PHP 7.4+ or PHP 8+
- A local server (e.g. Apache, PHP built-in server)
- Internet access to load HTMX via CDN
- If you have intermittent/slow internet, you may use the files inside the htmx_cdn folder in order for you to test the htmx samples locally.

## Extract on the "c:/wamp64/www/" path
## Run Locally on browser, type "localhost"

if you placed it inside a folder, like this "c:/wamp64/www/myhtmxtrainer"
Run Locally on browser, type "localhost/myhtmxtrainer/"

Please if you are working on the Dev server or a Production server make sure to set proper security i.e. csrf, if you transition into htmx. 
