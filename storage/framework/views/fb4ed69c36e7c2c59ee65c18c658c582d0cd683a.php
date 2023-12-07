<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.form-select'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Forms <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>Form Select <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Default Select</h4>
                    <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="FormSelectDefault" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="FormSelectDefault">
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">Use <code>&lt;select&gt;</code> attribute with numerous options to show value with choice's option.</p>
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-lg-6">
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Select your Status </option>
                                    <option value="1">Declined Payment</option>
                                    <option value="2">Delivery Error</option>
                                    <option value="3">Wrong Amount</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select rounded-pill mb-3" aria-label="Default select example">
                                    <option selected>Search for services</option>
                                    <option value="1">Information Architecture</option>
                                    <option value="2">UI/UX Design</option>
                                    <option value="3">Back End Development</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select" aria-label="Disabled select example" disabled>
                                    <option selected>Open this select menu (Disabled)</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>


<div class="d-none code-view">
<pre class="language-markup">
<code> &lt;select class=&quot;form-select mb-3&quot; aria-label=&quot;Default select example&quot;&gt;
&lt;option selected&gt;Open this select menu&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code>

<code> &lt;select class=&quot;form-select rounded-pill mb-3&quot; aria-label=&quot;Default select example&quot;&gt;
&lt;option selected&gt;Search for services&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;Information Architecture&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;UI/UX Design&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Back End Development&lt;/option&gt;
&lt;/select&gt;</code>

<code>&lt;select class=&quot;form-select&quot; aria-label=&quot;Disabled select example&quot; disabled&gt;
&lt;option selected&gt;Open this select menu (Disabled)&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
</div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Menu Size</h4>
                    <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="FormSelectMenuSizing" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="FormSelectMenuSizing">
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">Use <code>multiple</code> attribute to select multiple values and <code>size="your value"</code> attribute to show a number of choice option within a select area. </p>
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>Open this select menu (multiple select option)</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select" size="3" aria-label="size 3 select example">
                                    <option selected>Open this select menu (select menu size)</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                </select>
                            </div>
                        </div>
                    </div>
<div class="d-none code-view">
<pre class="language-markup" style="height: 275px;">
<code>&lt;select class=&quot;form-select&quot; multiple aria-label=&quot;multiple select example&quot;&gt;
&lt;option selected&gt;Open this select menu (multiple select option)&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code>

<code>&lt;select class=&quot;form-select&quot; size=&quot;3&quot; aria-label=&quot;size 3 select example&quot;&gt;
&lt;option selected&gt;Open this select menu (select menu size)&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;option value=&quot;4&quot;&gt;Four&lt;/option&gt;
&lt;option value=&quot;5&quot;&gt;Five&lt;/option&gt;
&lt;/select&gt;</code></pre>
</div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Select Size</h4>
                    <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="FormSelectSizing" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="FormSelectSizing">
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">Use <code>form-select-sm</code> class to set small select size and <code>form-select-lg</code> class to form-select class to
                        set large select size. No such class is required for default select size.</p>
                    <div class="live-preview">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-4">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <select class="form-select" aria-label=".form-select-sm example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-none code-view">
<pre class="language-markup" style="height: 275px;"><code>&lt;select class=&quot;form-select form-select-sm  mb-3&quot; aria-label=&quot;.form-select-sm example&quot;&gt;
&lt;option selected&gt;Open this select menu&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code>

<code>&lt;select class=&quot;form-select mb-3&quot; aria-label=&quot;.form-select-lg example&quot;&gt;
&lt;option selected&gt;Open this select menu&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code>

<code>&lt;select class=&quot;form-select form-select-lg&quot; aria-label=&quot;.form-select-lg example&quot;&gt;
&lt;option selected&gt;Open this select menu&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Choices</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div>
                        <div>
                            <h5 class="fs-14 mb-3">Single select input Example</h5>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-single-default" class="form-label text-muted">Default</label>
                                        <p class="text-muted">Set <code>data-choices</code> attribute to set a default single select.</p>
                                        <select class="form-control" data-choices name="choices-single-default"
                                            id="choices-single-default">
                                            <option value="">This is a placeholder</option>
                                            <option value="Choice 1">Choice 1</option>
                                            <option value="Choice 2">Choice 2</option>
                                            <option value="Choice 3">Choice 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-single-groups" class="form-label text-muted">Option
                                            Groups</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-groups</code> attribute to set option group</p>
                                        <select class="form-control" id="choices-single-groups" data-choices data-choices-groups  data-placeholder="Select City" name="choices-single-groups">
                                            <option value="">Choose a city</option>
                                            <optgroup label="UK">
                                                <option value="London">London</option>
                                                <option value="Manchester">Manchester</option>
                                                <option value="Liverpool">Liverpool</option>
                                            </optgroup>
                                            <optgroup label="FR">
                                                <option value="Paris">Paris</option>
                                                <option value="Lyon">Lyon</option>
                                                <option value="Marseille">Marseille</option>
                                            </optgroup>
                                            <optgroup label="DE" disabled>
                                                <option value="Hamburg">Hamburg</option>
                                                <option value="Munich">Munich</option>
                                                <option value="Berlin">Berlin</option>
                                            </optgroup>
                                            <optgroup label="US">
                                                <option value="New York">New York</option>
                                                <option value="Washington" disabled>Washington</option>
                                                <option value="Michigan">Michigan</option>
                                            </optgroup>
                                            <optgroup label="SP">
                                                <option value="Madrid">Madrid</option>
                                                <option value="Barcelona">Barcelona</option>
                                                <option value="Malaga">Malaga</option>
                                            </optgroup>
                                            <optgroup label="CA">
                                                <option value="Montreal">Montreal</option>
                                                <option value="Toronto">Toronto</option>
                                                <option value="Vancouver">Vancouver</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-single-no-search" class="form-label text-muted">Options added
                                            via config with no search</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-search-false data-choices-removeItem</code></p>
                                        <select class="form-control" id="choices-single-no-search" name="choices-single-no-search" data-choices data-choices-search-false  data-choices-removeItem>
                                        <option value="Zero">Zero</option>
                                        <option value="One">One</option>
                                        <option value="Two">Two</option>
                                        <option value="Three">Three</option>
                                        <option value="Four">Four</option>
                                        <option value="Five">Five</option>
                                        <option value="Six">Six</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-single-no-sorting" class="form-label text-muted">Options added
                                            via config with no sorting</label>
                                            <p class="text-muted">Set <code>data-choices data-choices-sorting-false</code> attribute.</p>
                                        <select class="form-control" id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices data-choices-sorting-false
                                            >
                                            <option value="Madrid">Madrid</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Malaga">Malaga</option>
                                            <option value="Washington" disabled>Washington</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Berlin">Berlin</option>
                                            <option value="Montreal">Montreal</option>
                                            <option value="New York">New York</option>
                                            <option value="Michigan">Michigan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- Single select input Example -->


                        <div class="mt-4">
                            <h5 class="fs-14 mb-3">Multiple select input</h5>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-multiple-default" class="form-label text-muted">Default</label>
                                        <p class="text-muted">Set <code>data-choices multiple</code> attribute.</p>
                                        <select class="form-control" id="choices-multiple-default" data-choices
                                            name="choices-multiple-default" multiple>
                                            <option value="Choice 1" selected>Choice 1</option>
                                            <option value="Choice 2">Choice 2</option>
                                            <option value="Choice 3">Choice 3</option>
                                            <option value="Choice 4" disabled>Choice 4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-multiple-remove-button" class="form-label text-muted">With
                                            remove button</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-removeItem multiple</code> attribute.</p>
                                        <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button"
                                            multiple>
                                            <option value="Choice 1" selected>Choice 1</option>
                                            <option value="Choice 2">Choice 2</option>
                                            <option value="Choice 3">Choice 3</option>
                                            <option value="Choice 4">Choice 4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-multiple-groups" class="form-label text-muted">Option
                                            groups</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-multiple-groups="true" multiple</code> attribute. </p>
                                        <select class="form-control" id="choices-multiple-groups" name="choices-multiple-groups" data-choices data-choices-multiple-groups="true"
                                            multiple>
                                            <option value="">Choose a city</option>
                                            <optgroup label="UK">
                                                <option value="London">London</option>
                                                <option value="Manchester">Manchester</option>
                                                <option value="Liverpool">Liverpool</option>
                                            </optgroup>
                                            <optgroup label="FR">
                                                <option value="Paris">Paris</option>
                                                <option value="Lyon">Lyon</option>
                                                <option value="Marseille">Marseille</option>
                                            </optgroup>
                                            <optgroup label="DE" disabled>
                                                <option value="Hamburg">Hamburg</option>
                                                <option value="Munich">Munich</option>
                                                <option value="Berlin">Berlin</option>
                                            </optgroup>
                                            <optgroup label="US">
                                                <option value="New York">New York</option>
                                                <option value="Washington" disabled>Washington</option>
                                                <option value="Michigan">Michigan</option>
                                            </optgroup>
                                            <optgroup label="SP">
                                                <option value="Madrid">Madrid</option>
                                                <option value="Barcelona">Barcelona</option>
                                                <option value="Malaga">Malaga</option>
                                            </optgroup>
                                            <optgroup label="CA">
                                                <option value="Montreal">Montreal</option>
                                                <option value="Toronto">Toronto</option>
                                                <option value="Vancouver">Vancouver</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                        <!-- multi select input Example -->

                        <div class="mt-4">
                            <h5 class="fs-14 mb-3">Text inputs</h5>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-text-remove-button" class="form-label text-muted">Set limit
                                            values with remove button</label>
                                            <p class="text-muted">Set <code>data-choices data-choices-limit="Required Limit" data-choices-removeItem</code>
                                                attribute.</p>
                                        <input class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="3" data-choices-removeItem type="text"
                                            value="Task-1" />
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label for="choices-text-unique-values" class="form-label text-muted">Unique values
                                            only, no pasting</label>
                                        <p class="text-muted">Set <code>data-choices data-choices-text-unique-true</code> attribute.</p>
                                        <input class="form-control" id="choices-text-unique-values" data-choices data-choices-text-unique-true type="text"
                                            value="Project-A, Project-B" />
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div>
                                <label for="choices-text-disabled" class="form-label text-muted">Disabled</label>
                                <p class="text-muted">Set <code>data-choices data-choices-text-disabled-true</code> attribute.</p>
                                <input class="form-control" id="choices-text-disabled" data-choices data-choices-text-disabled-true type="text"
                                    value="josh@joshuajohnson.co.uk, joe@bloggs.co.uk" />
                            </div>
                        </div>
                    </div>
                    <!-- end preview -->
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web dev\htdocs\lafkar-main\resources\views/forms-select.blade.php ENDPATH**/ ?>