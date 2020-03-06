<html>
<head>
<script src="{{mix('/js/app.js')}}" defer></script>
 <link href="{{mix('/css/app.css')}}" rel="stylesheet"/>
</head>
    <body>
    <div id="app">
        <b-navbar toggleable="lg" type="dark" variant="info">
            <b-navbar-brand href="#">MasterDev</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav>
                    <b-nav-item href="#">Link</b-nav-item>
                    <b-nav-item href="#" disabled>Disabled</b-nav-item>
                </b-navbar-nav>

                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">
                    <b-nav-form>
                        <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
                        <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
                    </b-nav-form>

                    <b-nav-item-dropdown text="Lang" right>
                        <b-dropdown-item href="#">EN</b-dropdown-item>
                        <b-dropdown-item href="#">ES</b-dropdown-item>
                        <b-dropdown-item href="#">RU</b-dropdown-item>
                        <b-dropdown-item href="#">FA</b-dropdown-item>
                    </b-nav-item-dropdown>

                    <b-nav-item-dropdown right>
                        <!-- Using 'button-content' slot -->
                        <template v-slot:button-content>
                            <em>User</em>
                        </template>
                        <b-dropdown-item href="#">Profile</b-dropdown-item>
                        <b-dropdown-item href="#">Sign Out</b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>

        <b-container fluid="md">

            <b-row>
                <img src="images/logo.jpg"  style=" display: block;margin-left: auto;margin-right: auto;width: 10%;border-radius: 50%;margin-top: 1px;">
            </b-row>
        </b-container>

        <b-container fluid>
            <div>
                <b-carousel
                    id="carousel-1"
                    v-model="slide"
                    :interval="4000"
                    controls
                    indicators
                    background="#ababab"
                    img-width="1024"
                    img-height="480"
                    style="text-shadow: 1px 1px 2px #333;"
                    @sliding-start="onSlideStart"
                    @sliding-end="onSlideEnd"
                >
                    <!-- Text slides with image -->
                    <b-carousel-slide
                        caption="First slide"
                        text="Nulla vitae elit libero, a pharetra augue mollis interdum."
                        img-src="https://picsum.photos/1024/480/?image=52"
                    ></b-carousel-slide>

                    <!-- Slides with custom text -->
                    <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=54">
                        <h1>Hello world!</h1>
                    </b-carousel-slide>

                    <!-- Slides with image only -->
                    <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=58"></b-carousel-slide>

                    <!-- Slides with img slot -->
                    <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
                    <b-carousel-slide>
                        <template v-slot:img>
                            <img
                                class="d-block img-fluid w-100 h-50"
                                width="1024"
                                height="480"
                                src="https://picsum.photos/1024/480/?image=55"
                                alt="image slot"
                            >
                        </template>
                    </b-carousel-slide>

                    <!-- Slide with blank fluid image to maintain slide aspect ratio -->
                    <b-carousel-slide caption="Blank Image" img-blank img-alt="Blank image">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eros felis, tincidunt
                            a tincidunt eget, convallis vel est. Ut pellentesque ut lacus vel interdum.
                        </p>
                    </b-carousel-slide>
                </b-carousel>
            </div>
        </b-container>

        <b-container>
            <p>hallo world</p>

        </b-container>
    </div>

</body>

</html>
