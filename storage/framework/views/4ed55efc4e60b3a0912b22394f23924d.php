<?php $__env->startSection('title', 'Blog'); ?>
<?php $__env->startSection('content'); ?>

<section id="main-banner-page" style="width:100%; height:80px;background:url(/images/banner1-1.jpg)">
</section>

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header blog-header parallax section-nav-smooth" style="background:url('/images/banner1-1.jpg');height:0px">
    <div class="container">
      <div class="gradient-bg title-wrap bottom25">
       <div class="row">
         <div class="col-lg-12 col-md-12 whitecolor">
          <h3 class="float-start">Blog</h3>
          <ul class="breadcrumb top10 bottom10 float-end hoverShine">
            <li class="breadcrumb-item hover-light"><a href="/">Home</a></li>
            <li class="breadcrumb-item hover-light">Blog</li>
          </ul>
        </div>
       </div>
      </div>
    </div>
 </section>
 <!--Page Header ends -->
 
<!-- Our Blogs -->
<section id="our-blog" class="bglight padding">
    <div class="container">
       <div id="blog-measonry" class="cbp top25">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="cbp-item">
             <div class="news_item shadow">
                <a class="image" href="<?php echo e(route('home.blog.show', $blog->id)); ?>">
                   <img src="<?php echo e($blog->blog_image); ?>" alt="" class="img-responsive">
                </a>
                <div class="news_desc">
                   <h3 class="text-capitalize font-normal darkcolor"><a href="<?php echo e(route('home.blog.show', $blog->id)); ?>"><?php echo e($blog->blog_title); ?></a></h3>
                   <ul class="meta-tags top20 bottom20">
                      <li><a href="#"><i class="fas fa-calendar-alt"></i><?php echo e($blog->blog_date); ?></a></li>
                      
                   </ul>
                   <p class="bottom35"><?php echo substr($blog->blog_details, 0, 250); ?><?php echo e(strlen($blog->blog_details) > 250 ? '...' : ''); ?></p>
                   <a href="<?php echo e(route('home.blog.show', $blog->id)); ?>" class="button gradient-btn">Read more</a>
                </div>
             </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
       </div>
       <div class="row">
          <div class="col-sm-12">
             <!--Pagination-->
               <?php echo $blogs->withQueryString()->links('pagination::bootstrap-5'); ?>

          </div>
       </div>
    </div>
 </section>
 <!--Our Blogs Ends-->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/neurosurgeondratique/resources/views/home/blog/index.blade.php ENDPATH**/ ?>