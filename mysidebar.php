<aside class="sidebar">
  <div class="sidebar-box">
    <div class="item">
      <h2 class="news-title">Archives</h2>
        <ul class="sidebar-list">
          <?php wp_get_archives('type=yearly'); ?>
          <?php wp_get_archives('post-type=post&type=yearly&show_post_count=1'); ?>
          <?php wp_get_archives('post-type=post&type=yearly&format=option&affter=年'); ?>
        </ul>
    </div>
    <div class="item">
      <h2 class="news-title">Categories</h2>
      <ul class="sidebar-list">
        <?php wp_list_categories('title_li='); ?>
      </ul>
    </div>
  </div>
</aside>
