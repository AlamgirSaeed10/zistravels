@extends('includes.master')
@section('title', $title)
@section('content')
<section>
	<div class="boxed-layout">
		<!-- Start Blog -->
			<section id="blog-main" class="blog-main archive grid section">
				<div class="container">
					<div class="col-md-12 col-sm-12 no-margin-text color-text text-center">
						<h2 style="font-weight: 800;">OUR BLOGS</h2>
					</div>
					<div class="row">
						<div class="blog-main">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row">
                                    @if ($posts)
                                        @foreach ($posts as $post)
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-blog">
                                                    <div class="blog-post">
                                                        <div class="blog-head">
                                                            @foreach ($post['images'] as $image)
                                                                <a href="{{ $image }}">
                                                                    <div class="blog-slide">
                                                                        <div class="single-slide">
                                                                            <img src="{{ $image }}" alt="{{ $post['title'] }}" style="width: 100%; height: auto;">
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                        <div class="blog-info">
                                                            <h2><a href="{{ $post['link'] }}">{{ $post['title'] }}</a></h2>
                                                            <p>
                                                                <?php
                                                                $content = strip_tags($post['content']);
                                                                $content = Str::limit($content, 600);
                                                                echo $content;
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No blog posts found.</p>
                                    @endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
</section>
@endsection
