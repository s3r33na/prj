<?php
include_once("DBConnection.php");

$query = "SELECT * FROM trips";
$result = mysqli_query($conn, $query);

echo "<html><head><style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            font-size: 16px; /* Adjust font size */
            margin-top: 20px;
            max-width: 1000px;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px; /* Adjust padding */
        }
        th {
            background-color: #f2f2f2;
        }
        .tablee {
            max-width: 1000px;
            width: 100%;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap');
        
        body {
          font-family: 'Lato', sans-serif;
          color: #333;
        }

        .container {
          max-width: 1000px;
          margin: 0 auto;
          padding: 20px;
        }

        .responsive-table {
          width: 100%;
          margin-bottom: 20px;
          border-collapse: collapse;
          overflow: hidden;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .responsive-table thead {
          position: relative;
          display: block;
          width: 100%;
        }

        .responsive-table tbody,
        .responsive-table tr,
        .responsive-table th,
        .responsive-table td {
          display: block;
        }

        .responsive-table th,
        .responsive-table td {
          padding: 15px;
          text-align: left;
          width: 33.33%;
          box-sizing: border-box;
        }

        .responsive-table th:first-child,
        .responsive-table td:first-child {
          border-right: 1px solid #ddd;
        }

        .responsive-table th:last-child,
        .responsive-table td:last-child {
          border-left: 1px solid #ddd;
        }

        .responsive-table th,
        .responsive-table td,
        .responsive-table th > div,
        .responsive-table td > div {
          position: relative;
        }

        .responsive-table th > div:before,
        .responsive-table td > div:before {
          content: ' 'attr(data-title);
          position: absolute;
          left: 0;
          width: 50%;
          padding: 15px;
          background-color: #f2f2f2;
          box-sizing: border-box;
        }

        .responsive-table tbody {
          height: 300px;
          overflow-y: auto;
        }

        .responsive-table tbody tr {
          margin-bottom: 20px;
        }

        .responsive-table tbody > tr > td {
          border-top: 1px solid #ddd;
        }

        .responsive-table tbody > tr > td:first-child {
          border-top: none;
        }

      </style>

      <style>
        body.large-screen {
          .table-wrapper {
            max-width: 800px;
          }
          .card-list-table {
            background: white;
            tbody tr {
              background: transparent;
              box-shadow: none;
              margin: 0;
              &:nth-of-type(even) {
                background: $gray-border;
              }
            }
            thead {
              display: table-header-group;
              th:last-child {
                box-shadow: none;
              }
              th {
                border-bottom: 1px solid $gray-border;
                padding: 12px 24px;
              }
            }
            tbody {
              tr {
                display: table-row;
                padding-bottom: 0;
                &:nth-of-type(even) {
                  background: #fff;
                }
              }
              td {
                border-bottom: 1px solid $gray-border;
                cursor: pointer;
                display: table-cell;
                padding: 20px 24px;
                transition: background .2s ease-out;
                vertical-align: middle;
                &:after {
                  display: none;
                }
                &:before {
                  content: '';
                }
              }
              tr:hover td {
                background: $faded-yellow;
              }
            }
          }
        }

        .buttons {
          margin: 10px 0 50px;
        }

        .table-wrapper {
          max-width: 300px;
          width: 80%;
          margin: 0 auto 0;
          max-height: 500px;
          overflow-y: scroll;
          position: relative;
          transition: all .2s ease-out;
          @media(min-width: $screen-sm-min) {
            background: white;
            box-shadow: $shadow;
          }
        }

        .card-list-table {
          table-layout: fixed;
          background: transparent;
          margin-bottom: 0;
          width: 100%;
          thead {
            display: none;
          }
          tbody tr {
            box-shadow: $shadow;
            background: #fff;
            border-bottom: 1px solid $gray-border;
            cursor: pointer;
            display: block;
            padding: 15px 10px;
            margin: 0 0 10px 0;
          }
          tbody td {
            border: 0;
            display: block;
            padding: 10px 10px 20px 40%;
            position: relative;
            &:first-of-type::after {
              visibility: hidden;
            }
            &:after {
              content: '';
              width: calc(100% - 30px);
              display: block;
              margin: 0 auto;
              height: 1px;
              background: $gray-border;
              position: absolute;
              left: 0;
              right: 0;
              top: -6px
            }
            &:before {
              color: $gray-light;
              text-transform: uppercase;
              font-size: .85em;
              content: attr(data-title);
              display: table-cell;
              font-weight: 500;
              height: 100%;
              left: 15px;
              margin: auto;
              position: absolute;
              vertical-align: middle;
              white-space: nowrap;
              width: 40%;
            }
          }
          thead th {
            text-transform: uppercase;
            font-size: .85em;
            color: $gray-light;
            letter-spacing: .5pt;
          }
        }

      </style>

      <style>
        var desktopBtn = $("#desktop");
        var mobileBtn = $("#mobile");
        var body = $('body');

        desktopBtn.on('click', function() {
          body.addClass('large-screen');
          togglePrimaryButtonStyle($(this));
        })

        mobileBtn.on('click', function() {
          body.removeClass('large-screen');
          togglePrimaryButtonStyle($(this));
        })

        function togglePrimaryButtonStyle(el) {
          var sibling = el.parent('.btn-group').siblings('.btn-group').find('.btn');
          el.addClass('btn-primary');
          sibling.removeClass('btn-primary').addClass('btn-default');
        }
      </style></head><body>";

if (mysqli_num_rows($
