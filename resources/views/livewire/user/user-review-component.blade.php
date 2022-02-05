<div>

    <div class="container">
    <div class="wrap-review-form">

        <div id="comments">
            <h2 class="woocommerce-Reviews-title">Add review for </h2>
            <ol class="commentlist">
                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                    <div id="comment-20" class="comment_container">

                                <img src="{{ asset('assets/images/demos/demo-4/products')}}/{{ $orderItem->product->image }}" alt="">

                        <div class="comment-text">

                            <p class="meta">
                                <strong class="woocommerce-review__author">{{ $orderItem->product->name }}</strong>

                            </p>

                        </div>
                    </div>
                </li>
            </ol>
        </div><!-- #comments -->

        <div id="review_form_wrapper">
            <div id="review_form">
                @if(Session::has('message'))
                <div class="alert alert-danger">
                   {{ Session::get('message') }}
                </div>
                @endif
                <div id="respond" class="comment-respond">

                    <form wire:click.prevent="addReview" id="commentform" class="comment-form" >

                        <div class="comment-form-rating">
                            <span>Your rating</span>
                            <p class="stars">

                                <label for="rated-1"></label>
                                <input type="checkbox" id="rated-1" name="rating" value="1" wire:model="rating">
                                <label for="rated-2"></label>
                                <input type="checkbox" id="rated-2" name="rating" value="2" wire:model="rating">
                                <label for="rated-3"></label>
                                <input type="checkbox" id="rated-3" name="rating" value="3" wire:model="rating">
                                <label for="rated-4"></label>
                                <input type="checkbox" id="rated-4" name="rating" value="4" wire:model="rating">
                                <label for="rated-5"></label>
                                <input type="checkbox" id="rated-5" name="rating" value="5" checked="checked" wire:model="rating">
                                @error('rating')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </p>
                        </div>

                        <p class="comment-form-comment">
                            <label for="comment">Your review <span class="required">*</span>
                            </label>
                            <textarea id="comment" name="comment" cols="45" rows="8" wire:model="comment"></textarea>
                            @error('comment')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </p>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                        </p>
                    </form>

                </div><!-- .comment-respond-->
            </div><!-- #review_form -->
        </div><!-- #review_form_wrapper -->

    </div>
</div>
