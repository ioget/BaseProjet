<style>
    *,
    ::before,
    ::after {
        box-sizing: border-box;
        margin: 0px;
        padding: 0px;
    }



    .news {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        margin-left: 150px;
        margin-right: 150px;

    }

    .news-title
    {
        margin-bottom: 25px;
    }


    .news-item {
        padding: 10px;
        margin: 10px;
        border: 1px solid #ccc;
       text-align: justify;
       line-height: 22px;
       height: fit-content;
       color: rgb(20,20,20);

    }

    .green-scroll {
        border-top: 2px solid green;
        width: 65%;
        position: fixed;
    }

    .container {
        padding: 5px;
    }
</style>




<h2><?= esc($title) ?></h2>

<?php if (!empty($news) && is_array($news)) : ?>

    <div class="news">
        <?php foreach ($news as $news_item) : ?>

            <div class="news-item">
                <div class="news-title">
                    <center>·
                        <h3><?= esc($news_item['title']) ?></h3>
                    </center>
                </div>
                <div class="main">
                    <?= esc($news_item['body']) ?>
                </div>
                <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
            </div>

        <?php endforeach ?>
    </div>

<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>