<!--  -->
<?php if ($site['metrika'] != null): ?><noscript><div><img src='https://mc.yandex.ru/watch/<?=$site['metrika']?>' style='position:absolute; left:-9999px;'/></div></noscript><?php endif ?>
<?php if ($site['pixel'] != null): ?><noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=<?=$site['pixel']?>&ev=PageView&noscript=1'/></noscript><?php endif ?>

<!-- js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<?php if ($site_set['swiper'] != 'false'): ?><script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js"></script><?php endif ?>

<!-- main js -->
<script src="/assets/js/fun.js?v=<?=$ver?>"></script>
<script src="/assets/js/norm.js?v=<?=$ver?>"></script>
<script src="/assets/js/main.js?v=<?=$ver?>"></script>
<?php foreach ($js as $i): ?><script src="/assets/js/<?=$i?>.js?v=<?=$ver?>"></script><?php endforeach ?>