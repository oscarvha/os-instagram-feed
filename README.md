# ${1: OS_INSTAGRAM_FEED}
WP Plugin Return Media For intagram Plugin
With Transient during 24 hours

## Installation
Install in your WP

## Usage
Insert in your theme 

```php
$medias =  getMediasInstagramByAccount('account instagram',number of post);
```

Foreach medias 

```html
    <div class="instagram-home__container">
        <?php foreach($medias as $media) : ?>
            <div class="instagram-feed-image">
                <a href="<?php echo $media['link'] ?>" target="_blank" title="<?php echo $media['title'] ?>">
                    <img src="<?php echo $media['image'] ?>" />
                </a>

            </div>

        <?php endforeach; ?>

    </div>
```

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## Credits
Oscar Sanchez oscarsan1986@gmail.com
]]