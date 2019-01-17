
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        img{margin: 0 auto;display: block;}
        


        .centered {
              margin:auto;
              text-align:center;

            }
        .button::-moz-focus-inner{
          border: 0;
          padding: 0;
        }

        .button{
          display: inline-block;
          *display: inline;
          zoom: 1;
          padding: 6px 20px;
          margin: 0;
          cursor: pointer;
          border: 1px solid #bbb;
          overflow: visible;
          font: bold 13px arial, helvetica, sans-serif;
          text-decoration: none;
          white-space: nowrap;
          color: #555;
          
          background-color: #ddd;
          background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,1)), to(rgba(255,255,255,0)));
          background-image: -webkit-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
          background-image: -moz-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
          background-image: -ms-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
          background-image: -o-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
          background-image: linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
          
          -webkit-transition: background-color .2s ease-out;
          -moz-transition: background-color .2s ease-out;
          -ms-transition: background-color .2s ease-out;
          -o-transition: background-color .2s ease-out;
          transition: background-color .2s ease-out;
          background-clip: padding-box; /* Fix bleeding */
          -moz-border-radius: 3px;
          -webkit-border-radius: 3px;
          border-radius: 3px;
          -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .3), 0 2px 2px -1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .3) inset;
          -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .3), 0 2px 2px -1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .3) inset;
          box-shadow: 0 1px 0 rgba(0, 0, 0, .3), 0 2px 2px -1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .3) inset;
          text-shadow: 0 1px 0 rgba(255,255,255, .9);
          
          -webkit-touch-callout: none;
          -webkit-user-select: none;
          -khtml-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        .button:hover{
          background-color: #eee;
          color: #555;
        }

        .button:active{
          background: #e9e9e9;
          position: relative;
          top: 1px;
          text-shadow: none;
          -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
          -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
          box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
        }

        .button[disabled], .button[disabled]:hover, .button[disabled]:active{
          border-color: #eaeaea;
          background: #fafafa;
          cursor: default;
          position: static;
          color: #999;
          /* Usually, !important should be avoided but here it's really needed :) */
          -moz-box-shadow: none !important;
          -webkit-box-shadow: none !important;
          box-shadow: none !important;
          text-shadow: none !important;
        }

        /* Smaller buttons styles */

        .button.small{
          padding: 4px 12px;
        }

        /* Larger buttons styles */

        .button.large{
          padding: 12px 30px;
          text-transform: uppercase;
        }

        .button.large:active{
          top: 2px;
        }

        /* Colored buttons styles */

        .button.green, .button.red, .button.blue {
          color: #fff;
          text-shadow: 0 1px 0 rgba(0,0,0,.2);
          
          background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,.3)), to(rgba(255,255,255,0)));
          background-image: -webkit-linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
          background-image: -moz-linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
          background-image: -ms-linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
          background-image: -o-linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
          background-image: linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
        }

        /* */

        .button.green{
          background-color: #57a957;
          border-color: #57a957;
        }

        .button.green:hover{
          background-color: #62c462;
        }

        .button.green:active{
          background: #57a957;
        }

        /* */

        .button.red{
          background-color: #ca3535;
          border-color: #c43c35;
        }

        .button.red:hover{
          background-color: #ee5f5b;
        }

        .button.red:active{
          background: #c43c35;
        }

        /* */

        .button.blue{
          background-color: #269CE9;
          border-color: #269CE9;
        }

        .button.blue:hover{
          background-color: #70B9E8;
        }

        .button.blue:active{
          background: #269CE9;
        }

        /* */

        .green[disabled], .green[disabled]:hover, .green[disabled]:active{
          border-color: #57A957;
          background: #57A957;
          color: #D2FFD2;
        }

        .red[disabled], .red[disabled]:hover, .red[disabled]:active{
          border-color: #C43C35;
          background: #C43C35;
          color: #FFD3D3;
        }

        .blue[disabled], .blue[disabled]:hover, .blue[disabled]:active{
          border-color: #269CE9;
          background: #269CE9;
          color: #93D5FF;
        }

        /* Group buttons */

        .button-group,
        .button-group li{
          display: inline-block;
          *display: inline;
          zoom: 1;
        }

        .button-group{
          font-size: 0; /* Inline block elements gap - fix */
          margin: 0;
          padding: 0;
          background: rgba(0, 0, 0, .1);
          border-bottom: 1px solid rgba(0, 0, 0, .1);
          padding: 7px;
          -moz-border-radius: 7px;
          -webkit-border-radius: 7px;
          border-radius: 7px;
        }

        .button-group li{
          margin-right: -1px; /* Overlap each right button border */
        }

        .button-group .button{
          font-size: 13px; /* Set the font size, different from inherited 0 */
          -moz-border-radius: 0;
          -webkit-border-radius: 0;
          border-radius: 0;
        }

        .button-group .button:active{
          -moz-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
          -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
          box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
        }

        .button-group li:first-child .button{
          -moz-border-radius: 3px 0 0 3px;
          -webkit-border-radius: 3px 0 0 3px;
          border-radius: 3px 0 0 3px;
        }

        .button-group li:first-child .button:active{
          -moz-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
          -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
          box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
        }

        .button-group li:last-child .button{
          -moz-border-radius: 0 3px 3px 0;
          -webkit-border-radius: 0 3px 3px 0;
          border-radius: 0 3px 3px 0;
        }

        .button-group li:last-child .button:active{
          -moz-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset;
          -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset;
          box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset;
        }

        .column {
          float: left;
          
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        .left {
          width: 65%;
        }

        .right {
          width: 35%;
        }
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
          }
        }

        .responsive {
         width: 100%;
         max-width: 400px;
         height: auto;
        }

    </style>
</head>
<body style="font-family: verdana">
<div class="container">
<div class="row">
    <div class="column left">
        <p>Hounorable Member,</p>
            <p>

            We are very pleased to inform you that SUST Club Limited is going to organize a picnic event on 1st February, 2019. We cordially invite you and your family to join with us in the picnic.
            </p>
            <p> 

            Registration for the picnic is on going. Registration will be closed on 24th January, 2019. Subscription details of the picnic is available  <strong><a href="https://goo.gl/RtC2i2">here</a></strong>
            </p>
            <p>
            Looking forward to enjoy  a nice picnic with you and your family.

            </p>
            <p>Best regards,</p>
            <p>SUST Club Limited </p>
    </div>
    <div class="column right" style="text-align:center;">
        <img width="150" class="" src="{{ url('img/sust.png')}}" />
            <a href="https://goo.gl/RtC2i2">
                <button class="red button large">Click for Registration Details</button>
            </a>
    </div>
{{-- <table>
    <tr>
        <td width="60%">
            <p>Hounorable Member,</p>
            <p>

            We are very pleased to inform you that SUST Club Limited is going to organize a picnic event on 1st February, 2019. We cordially invite you and your family to join with us in the picnic.
            </p>
            <p> 

            Registration for the picnic is on going. Registration will be closed on 24th January, 2019. Subscription details of the picnic is available  <strong><a href="https://goo.gl/RtC2i2">here</a></strong>
            </p>
            <p>
            Looking forward to enjoy  a nice picnic with you and your family.

            </p>
            <p>Best regards,</p>
            <p>SUST Club Limited </p>
        </td>
        <td width="40%" style="text-align:center;" >

            <img width="150" class="" src="{{ url('img/sust.png')}}" />
            <a href="https://goo.gl/RtC2i2">
                <button class="red button large">Click for Registration Details</button>
            </a>
            
        </td>
    </tr>
    <tr>
        <td colspan="2"></td>
    </tr>
</table> --}}

<div class="row"><img width="" class="responsive" src="{{ url('img/i.png')}}" /></div>








</div>
</div>
</body>
</html>


