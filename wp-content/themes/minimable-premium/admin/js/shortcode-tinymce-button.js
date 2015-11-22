(function() {
    tinymce.PluginManager.add('pushortcodes_element', function( editor )
    {
        editor.addButton('pushortcodes_element', {
            type: 'menubutton',
            text: 'Elements',
            menu: [
                {
                    text: 'Tabs', onclick: function() {
                        editor.insertContent('[tabgroup n="3" name="group-one"]<br/><br/>[tab title="Tab 1"]<p>Insert tab content here</p>[/tab]<br/><br/>[tab title="Tab 2"]<p>Insert tab content here</p>[/tab]<br/><br/>[tab title="Tab 3"]<p>Insert tab content here</p>[/tab]<br/><br/>[/tabgroup]<br/><br/><br/>');
                    }
                },
                {
                    text: 'Video', onclick: function() {
                        editor.insertContent('[vid site="youtube" id="43sYSMHYf-Q" w="853" h="480"]<br/><br/>');
                    }
                },
                {
                    text: 'Google Map', onclick: function() {
                        editor.insertContent('[googlemap width="940" height="600" src="map url"]<br/><br/>');
                    }
                },
                {
                    text: 'Latest Posts', onclick: function() {
                        editor.insertContent('[recent-posts posts="3" cat="1" orientation="hor" excerpt="on" thumb="on"]<br/><br/>');
                    }
                },
                {
                    text: 'Icon', onclick: function() {
                        editor.insertContent('[icon type="umbrella" size="2x" pull="left" rotate="90" flip="vertical"]<br/><br/>');
                    }
                },
                {
                    text: 'Button', onclick: function() {
                        editor.insertContent('[link to="http://minimable.fedeweb.net" width="300" pull="center" target="_blank"]Minimable[/link]<br/><br/>');
                    }
                }
            ]
        });

    });
})();
(function() {
    tinymce.PluginManager.add('pushortcodes_layout', function( editor )
    {
        editor.addButton('pushortcodes_layout', {
            type: 'menubutton',
            text: 'Layout',
            menu: [
                {

                    classes: 'col-layout 2-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_half]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_half]<br/><br/>[one_half]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_half]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {

                    classes: 'col-layout 3-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_third]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_third]<br/><br/>[one_third]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_third]<br/><br/>[one_third]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_third]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {

                    classes: 'col-layout 4-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {
                    classes: 'col-layout 6-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_sixth]<br/><br/>[one_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_sixth]<br/><br/>[one_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_sixth]<br/><br/>[one_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_sixth]<br/><br/>[one_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_sixth]<br/><br/>[one_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_sixth]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {

                    classes: 'col-layout 8_4-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[two_third]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/two_third]<br/><br/>[one_third]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_third]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {

                    classes: 'col-layout 4_8-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_third]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_third]<br/><br/>[two_third]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/two_third]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {
                    classes: 'col-layout 9_3-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[three_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/three_fourth]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {

                    classes: 'col-layout 3_9-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[three_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/three_fourth]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {

                    classes: 'col-layout 10_2-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[five_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/five_sixth]<br/><br/>[one_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_sixth]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {
                    classes: 'col-layout 2_10-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_sixth]<br/><br/>[five_sixth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/five_sixth]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {

                    classes: 'col-layout 6_3_3-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_half]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_half]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {

                    classes: 'col-layout 3_3_6-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[one_half]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_half]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },
                {
                    classes: 'col-layout 3_6_3-cols',
                    icon: 'col-icon',
                    onclick: function() {
                        editor.insertContent('[start_row]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[one_half]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_half]<br/><br/>[one_fourth]<p>Insert content here (text, images, elements like video, icons, tabs etc. or other columns)</p>[/one_fourth]<br/><br/>[end_row]<br/><br/><br/>');
                    }
                },

            ]
        });

    });
})();
(function() {
    tinymce.PluginManager.add('pushortcodes_demo', function( editor )
    {
        editor.addButton('pushortcodes_demo', {
            type: 'menubutton',
            text: 'Predefined Layout',
            menu: [
                {
                    text: 'The Original - We Think Different',
                    classes: 'predefined-layout think-different-layout',
                    icon: 'layout-icon',
                    onclick: function() {
                        editor.insertContent('[start_row] <br/><br/> [one_fourth] <br/><br/> [icon type="cog" size="3x" pull="center"] <h3>Column</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [one_fourth] <br/><br/> [one_fourth] <br/><br/> [icon type="magic" size="3x" pull="center" ] <h3>Column</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [one_fourth] <br/><br/> [icon type="eye" size="3x" pull="center" ] <h3>Column</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [one_fourth] <br/><br/> [icon type="rocket" size="3x" pull="center" ] <h3>Column</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [end_row]<br/><br/><br/>'); }
                },
                {
                    text: 'The Original - More Information',
                    classes: 'predefined-layout more-info-layout',
                    icon: 'layout-icon',
                    onclick: function() {
                        editor.insertContent('<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> <h2>Latest posts from "Category one" with thumbs and excerpt</h2> <br/><br/> [start_row] <br/><br/> [recent-posts posts="3" cat="1" orientation="hor" thumb="on"] <br/><br/> [end_row] <br/><br/> [start_row] <br/><br/> [two_third] <br/><br/> [tabgroup] <br/><br/> [tab title="Tab 1"] <br/><br/> <img class="size-medium wp-image-560 alignleft" src="http://placehold.it/300x180" alt="unsplash_523246fd7677f_1" width="300" height="180" /> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet. Curabitur aliquet orci sit amet est posuere consectetur. Fusce nec leo ut massa viverra venenatis. Nam accumsan libero a elit aliquet quis ullamcorper arcu tincidunt.</p> <p>Praesent purus turpis, consectetur quis congue vel, pulvinar at lorem. Vivamus varius condimentum dolor, quis ultricies ipsum porta quis.</p> [/tab] <br/><br/> [tab title="Tab 2"] <h4>Tab 2</h4> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet. Curabitur aliquet orci sit amet est posuere consectetur. Fusce nec leo ut massa viverra venenatis. Nam accumsan libero a elit aliquet quis ullamcorper arcu tincidunt.</p> <p>Praesent purus turpis, consectetur quis congue vel, pulvinar at lorem. Vivamus varius condimentum dolor, quis ultricies ipsum porta quis.</p> [/tab] <br/><br/> [tab title="Tab 3"] <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet. Curabitur aliquet orci sit amet est posuere consectetur. Fusce nec leo ut massa viverra venenatis. Nam accumsan libero a elit aliquet quis ullamcorper arcu tincidunt.</p> <p>Praesent purus turpis, consectetur quis congue vel, pulvinar at lorem. Vivamus varius condimentum dolor, quis ultricies ipsum porta quis.</p> [/tab] <br/><br/> [/tabgroup] <br/><br/> [/two_third] <br/><br/> [one_third] <h2>Last post</h2> <p>The last post without the thumb, from "Category two".</p> [recent-posts posts="1" cat="13" orientation="ver" thumb="off"] <br/><br/> [/one_third] <br/><br/> [end_row] <br/><br/> [start_row] <br/><br/> [one_half] <br/><br/> <img class="alignnone size-large wp-image-543" src="http://placehold.it/570x380" alt="unsplash_523ae1f5502d6_1" width="570" height="380" /> <br/><br/> [/one_half] <br/><br/> [one_half] <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [start_row] <br/><br/> [one_fourth] <h3>Column</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [one_fourth] <h3>Column</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [end_row] <br/><br/> [/one_half] <br/><br/> [end_row] <br/><br/> [start_row] <br/><br/> [one_fourth] [icon type="umbrella" size="3x" pull="center" ] <h4>Column</h4> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [one_fourth] <br/><br/> [icon type="star" size="3x" pull="center" ] <h4>Column</h4> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [one_fourth] <br/><br/> [icon type="map-marker" size="3x" pull="center" ] <h4>Column</h4> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [one_fourth] <br/><br/> [icon type="mobile" size="3x" pull="center" ] <h4>Column</h4> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_fourth] <br/><br/> [end_row] <br/><br/> [start_row] <br/><br/> [one_sixth] <h5>Column</h5> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_sixth] <br/><br/> [one_sixth] <h5>Column</h5> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_sixth] <br/><br/> [one_sixth] <h5>Column</h5> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_sixth] <br/><br/> [one_sixth] <h5>Column</h5> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_sixth] <br/><br/> [one_sixth] <h5>Column</h5> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_sixth] <br/><br/> [one_sixth] <h5>Column</h5> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_sixth] <br/><br/> [end_row] <br/><br/><br/>'); }
                },
                {
                    text: 'Particles - Icons Layout',
                    classes: 'predefined-layout icons-layout',
                    icon: 'layout-icon',
                    onclick: function() {
                        editor.insertContent('<h2 style="text-align: center;">[color]A new way to impress users[/color]</h2> <p style="text-align: center;">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> [start_row] <br/><br/> [one_third] <p>[icon type="bed" size="2x" title="Lorem ipsum"]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="diamond" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="heartbeat" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="subway" size="2x" title="Lorem ipsum"]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="motorcycle" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="magic" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [end_row] <br/><br/><br/>'); }
                },
                {
                    text: 'Shop - Sophisticated Style',
                    classes: 'predefined-layout shop-layout',
                    icon: 'layout-icon',
                    onclick: function() {
                        editor.insertContent('[start_row] <br/><br/> [one_half pull="right"] <h1>Sophisticated [color]style[/color]</h1> <p><strong>Duis autem</strong> vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>[tabgroup n="3" name="watches"] <br/><br/> [tab title="Material"] <h3>Material</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> [/tab] <br/><br/> [tab title="Bracalet"] <h3>Bracalet</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> [/tab] <br/><br/> [tab title="Dial"] <h3>Dial</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> [/tab] <br/><br/> [/tabgroup] <br/><br/> [/one_half] <br/><br/> [end_row] <br/><br/><br/>'); }
                },
                {
                    text: 'Shop - Single Product Description 1',
                    classes: 'predefined-layout single-product-layout-1',
                    icon: 'layout-icon',
                    onclick: function() {
                        editor.insertContent('<h1 style="text-align: center;">Awesome products for awesome clients</h1> <br/><br/> <img class="alignnone wp-image-560 size-full" src="http://placehold.it/1170x530" alt="unsplash_523246fd7677f_1" width="1170" height="530" /> [start_row] <br/><br/> [two_third] <br/><br/> <img class="alignnone size-large wp-image-540" src="http://placehold.it/770x510" alt="wrist-watch-free-license-cc0" width="770" height="510" /> <br/><br/> [/two_third] <br/><br/> [one_third] <h3>Precision in craft</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum</strong> has been the industry’s standard dummy text ever since the 1500s, <em>when an unknown</em> printer took a galley of type and scrambled it to make a type specimen book.</p> [start_row] <br/><br/> [one_sixth] <h4>Features</h4> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> [/one_sixth] <br/><br/> [one_sixth] <h4>Technicals</h4> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> [/one_sixth] <br/><br/> [end_row] <br/><br/> [/one_third] <br/><br/> [end_row] <br/><br/> [start_row] <br/><br/> [two_third] <br/><br/> [start_row] <br/><br/> [one_third] <h3>The Model</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_third] <br/><br/> [one_third] <h3>Sophisticated style</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_third] <br/><br/> [end_row] <br/><br/> [start_row] <br/><br/> [one_third] <p>[icon type="clock-o" size="2x" title="Lorem ipsum"]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="diamond" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="cubes" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="key" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [end_row] <br/><br/> [/two_third] <br/><br/> [one_third] <br/><br/> <img class="alignnone size-large wp-image-541" src="http://placehold.it/370x510" width="370" height="510" /> <br/><br/> [/one_third] <br/><br/> [end_row] <br/><br/> [vid site="vimeo" id="12167049" w="1170" h="658"] <br/><br/>'); } }, {
                    text: 'Shop - Single Product Description 2',
                    classes: 'predefined-layout single-product-layout-2',
                    icon: 'layout-icon',
                    onclick: function() {
                        editor.insertContent('[vid site="vimeo" id="12167049" w="1170" h="658"] <br/><br/> [start_row] <br/><br/> [two_third] <br/><br/> <img class="alignnone size-large wp-image-540" src="http://placehold.it/770x510" width="770" height="510" /> <br/><br/> [/two_third] <br/><br/> [one_third] <br/><br/> <img class="alignnone size-large wp-image-540" src="http://placehold.it/370x510" width="370" height="510" /> <br/><br/> [/one_third] <br/><br/> [end_row] <h1 style="text-align: center;">Awesome products for awesome clients</h1> &nbsp; [start_row] <br/><br/> [two_third] <br/><br/> [start_row] <br/><br/> [one_third] <h3>The model</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_third] <br/><br/> [one_third] <h3>Sophisticated style</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> [/one_third] <br/><br/> [end_row] <br/><br/> [start_row] <br/><br/> [one_third] <p>[icon type="clock-o" size="2x" title="Lorem ipsum"]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="diamond" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="cubes" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [one_third] <p>[icon type="key" size="2x" title="Lorem ipsum" ]</p> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> [/one_third] <br/><br/> [end_row] <br/><br/> [/two_third] <br/><br/> [one_third] <h3>Precision in craft</h3> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> [start_row] <br/><br/> [one_sixth] <h4>Features</h4> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> [/one_sixth] <br/><br/> [one_sixth] <h4>Technicals</h4> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> [/one_sixth] <br/><br/> [end_row] <br/><br/> [/one_third] <br/><br/> [end_row] <br/><br/> <img class="alignnone wp-image-560 size-full" src="http://placehold.it/1170x530" width="1170" height="530" /> <br/><br/>'); } }, ]
        });

    });
})();