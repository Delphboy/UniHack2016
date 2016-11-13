@extends('templates/default')

@section('content')
    <div class="fg-white bg-cyan padding30 margin10 align-center">
        <h1>Hey Katie, your next meeting is Monday at 3pm</h1>
        <p>It doesn't look like you have anything planned<p>
            <a  class="button success" href="">I do! Update Calender</a> <a class="button danger" href="">Give me suggestions</a>
    </div>

    <div class="bg-gray fg-white padding10 margin10">
        <strong>What next? 💡</strong> How about a git workshop? <a class="fg-lightBlue fg-hover-cyan" href="/">Let's do it! 🤘</a>
    </div>

    <div class="tile-container margin10">


        <div class="tile-wide-y tile-wide bg-white" data-role="tile">
            <div class="tile-content">
                <div id="cal" data-role="calendar" data-buttons="false" data-stored="2016-11-14, 2016-11-21" data-day-click="day_click" class="calendar bg-white"></div>
                <div id="event-info" class="margin5 padding5 fg-white" style="background:#59cde2;" >No Event Selected</div>
                <script>
                    function day_click(short, full) {
                        var result = $("#cal").data("stored").split(', ');

                        var res = jQuery.inArray( short, result );

                        if(result.indexOf(short) >= 0)
                        {
                            $( "#event-info" ).text("Event: Hackathon");
                        } else {
                            $( "#event-info" ).html("<a class='button success' href=''>Make New Event</a>");
                        }
                    }
                </script>
            </div>
        </div>

        <a href="/activities">
        <div class="tile-wide fg-white" data-role="tile">
            <div class="tile-content slide-up-2">
                <div class="slide">

                    <div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;images/students.jpeg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>

                <div class="slide-over bg-cyan text-small padding10">
                    Need something low effort? Want to try something new? Maybe teach some basic concepts like git for beginners
                    we've got you covered with our repository of talks and activities, sorted in tags.
                </div>
                <div class="tile-label bg-grayDark">Talks & Activities</div>
            </div>
        </div>
        </a>

        <div class="tile fg-white" data-role="tile" >
            <div class="tile-content slide-up-2">
                <div class="slide">

                    <div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;images/talking.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
                <div class="slide-over bg-cyan text-small padding10">
                    Network! Meet and chat to other committee members from Computing Societies across the UK
                </div>
                <div class="tile-label bg-grayDark">Messaging</div>
            </div>
        </div>


        <div class="tile fg-white" data-role="tile">
            <div class="tile-content slide-up-2">
                <div class="slide">

                    <div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;images/advice.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
                <div class="slide-over bg-cyan text-small padding10">
                    Got a trip or event coming up that requires dealing with the Student Union?
                    Organising a guest speaker and have some questions?
                </div>
                <div class="tile-label bg-grayDark">Advice</div>
            </div>
        </div>

        <a href="/trips">
            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content slide-up-2">
                    <div class="slide">

                        <div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;images/bus.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
                    <div class="slide-over bg-cyan text-small padding10">
                        Planning a trip and want some suggestions? Get help from your fellow Computing Societies, suggestion, review and discuss
                        the best trips so your members won't regret going.
                    </div>
                    <div class="tile-label bg-grayDark">Trips</div>
                </div>
            </div>
        </a>

        <a href="/speakers">
        <div class="tile fg-white" data-role="tile">
            <div class="tile-content slide-up-2">
                <div class="slide">

                    <div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;images/guest.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
                <div class="slide-over bg-cyan text-small padding10">
                    Got a great contact who is up for doing guest speaking at society meetings? Let other people know and
                    share contacts for a great experience
                </div>
                <div class="tile-label bg-grayDark">Guest Speakers</div>
            </div>
        </div>
        </a>

        <a href="https://github.com/greenpencil">
        <div class="tile fg-white" data-role="tile">
            <div class="tile-content slide-up-2">
                <div class="slide">

                    <div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;images/octocat.png&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
                <div class="slide-over bg-cyan text-small padding10">
                    Run projects, get members involved, get educational benefits. This links to your GitHub group.
                </div>
                <div class="tile-label bg-grayDark">Github</div>
            </div>
        </div>
        </a>

        <div class="tile fg-white" data-role="tile">
            <div class="tile-content slide-up-2">
                <div class="slide">

                    <div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;images/tickets.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
                <div class="slide-over bg-cyan text-small padding10">
                    Want to open your events to local societies? National societies? prioritising tickets for your members?
                     This is the place to go.
                </div>
                <div class="tile-label bg-grayDark">Tickets</div>
            </div>
        </div>

        <a href="http://www.technw.uk/">
            <div class="tile-wide fg-white" data-role="tile">
                    <div class="tile-content slide-up-2">

                        <div class="slide">

                            <div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;images/guh.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
                        <div class="slide-over bg-cyan text-small padding10">
                            If you're looking for something to do this week why not check out the local tech scene? From specific
                            technology stacks, conferences, freelance and start up meet ups to meet ups promoting programming styles and mentalities.
                        </div>
                        <div class="tile-label bg-grayDark">Local Events</div>
                    </div>
            </div>
        </a>

    </div>

@stop