<?php $__env->startSection('title', 'Create New Blog'); ?>
<?php $__env->startSection('content'); ?>

<section id="main-banner-page" style="width:100%; height:80px;background:url(/images/banner1-1.jpg)"></section>

<div class="container-fluid">
    <div class="row flex-nowrap">

        <?php echo $__env->make('dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="col py-3" style="background:#eee">

            <?php echo $__env->make('partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="col-md-8 whitebox">
                <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2">Dashboard
                    </h2>
                </div>
                <div class="widget logincontainer">
                    <h3 class="darkcolor bottom30 text-center text-lg-start">Create New Blog 
                        <a class="btn btn-primary" style="float:right;font-size:15px" href="<?php echo e(route('blog.index')); ?>">View</a>
                    </h3>
                    <form class="getin_form border-form" id="login" action="<?php echo e(route('blog.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-title" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Blog Title:" required id="blog-title" name="blog_title">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-date" class="d-none"></label>
                                    <input class="form-control" type="date" placeholder="Publish Date: (MM-DD-YYYY)" required id="blog-date" name="blog_date">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-image" class="d-none"></label>
                                    <input class="form-control" type="file" placeholder="Blog Image:" id="blog-image" name="blog_image">
                                    <label style="color:red">Blog image size 6:4 or (600px X 400px)</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-details" class="d-none"></label>
                                    <textarea class="form-control" placeholder="Blog details:" required id="blog-details" name="blog_details" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom30 ml-1">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" checked type="checkbox" value="Active" name="status" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Publish
                                        </label>
                                    </div>
                                    <div class="form-check text-left">
                                        <input class="form-check-input"  type="checkbox" value="Yes" name="home" id="home">
                                        <label class="form-check-label" for="home">Home</label>
                                    </div>
                                </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button gradient-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $('.dropify').dropify();
    CKEDITOR.replace( 'blog-details' );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/neurosurgeondratique/resources/views/dashboard/blog/create.blade.php ENDPATH**/ ?>