<?php include '../views/admin/layout/header.php'?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
                <div class="title-header">
                    <h5>Add New Product</h5>
                </div>

                <!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Product Information</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Product
                                                            Name</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text"
                                                                placeholder="Product Name">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-sm-2 col-form-label form-label-title">Product
                                                            Type</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option disabled>Static Menu</option>
                                                                <option>Simple</option>
                                                                <option>Classified</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Category</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option disabled>Category Menu</option>
                                                                <option>Electronics</option>
                                                                <option>TV & Appliances</option>
                                                                <option>Home & Furniture</option>
                                                                <option>Another</option>
                                                                <option>Baby & Kids</option>
                                                                <option>Health, Beauty & Perfumes</option>
                                                                <option>Uncategorized</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Subcategory</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option disabled>Subcategory Menu</option>
                                                                <option>Ethnic Wear</option>
                                                                <option>Ethnic Bottoms</option>
                                                                <option>Women Western Wear</option>
                                                                <option>Sandels</option>
                                                                <option>Shoes</option>
                                                                <option>Beauty & Grooming</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Brand</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single w-100">
                                                                <option disabled>Brand Menu</option>
                                                                <option value="puma">Puma</option>
                                                                <option value="hrx">HRX</option>
                                                                <option value="roadster">Roadster</option>
                                                                <option value="zara">Zara</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Until</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single w-100">
                                                                <option disabled>Until Menu</option>
                                                                <option>Kilogram</option>
                                                                <option>Pieces</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Description</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <label class="form-label-title col-sm-2 mb-0">Product
                                                                Description</label>
                                                            <div class="col-sm-10">
                                                                <div id="editor"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Product Images</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Images</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control form-choose" type="file"
                                                                id="formFileMultiple" multiple>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Thumbnail
                                                            Image</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control form-choose" type="file"
                                                                id="formFileMultiple1" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Product Videos</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-sm-2 col-form-label form-label-title">Video
                                                            Provider</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option>Vimeo</option>
                                                                <option>Youtube</option>
                                                                <option>Dailymotion</option>
                                                                <option>Vimeo</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Video
                                                            Link</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text"
                                                                placeholder="Video Link">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Shipping</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Weight
                                                            (kg)</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="number"
                                                                placeholder="Weight">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Dimensions
                                                            (cm)</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option>Length</option>
                                                                <option>Width</option>
                                                                <option>Height</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Inventory</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">SKU</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label class="col-sm-2 col-form-label form-label-title">Stock
                                                            Status</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option>In Stock</option>
                                                                <option>Out Of Stock</option>
                                                                <option>On Backorder</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Link Products</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Upsells</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="search">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label
                                                            class="form-label-title col-sm-2 mb-0">Cross-Sells</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="search">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->

                <!-- footer Start -->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer En -->
            </div>
            <!-- Container-fluid End -->
        </div>
<?php include '../views/admin/layout/footer.php'?>