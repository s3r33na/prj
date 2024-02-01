<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Nunito, sans-serif;
          }
          
          .responsive-container-block {
            min-height: 75px;
            height: fit-content;
            width: 100%;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            display: flex;
            flex-wrap: wrap;
            margin-top: 0px;
            margin-right: auto;
            margin-bottom: 0px;
            margin-left: auto;
            justify-content: flex-start;
          }
          
          a {
            text-decoration-line: none;
            text-decoration-thickness: initial;
            text-decoration-style: initial;
            text-decoration-color: initial;
          }
          
          .text-blk {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            line-height: 25px;
          }
          
          .responsive-container-block.bigContainer {
            padding-top: 10px;
            padding-right: 30px;
            padding-bottom: 10px;
            padding-left: 30px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px 50px 10px 50px;
          }
          
          .mainImg {
            color: black;
            width: 100%;
            height: auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
          }
          
          .text-blk.headingText {
            font-size: 22px;
            font-weight: 700;
            line-height: 30px;
            color: rgb(176, 98, 255);
            padding-top: 0px;
            padding-right: 10px;
            padding-bottom: 0px;
            padding-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 5px;
            margin-left: 0px;
          }
          
          .allText {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            width: 40%;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
          }
          
          .text-blk.subHeadingText {
            color: rgb(102, 102, 102);
            font-size: 26px;
            line-height: 32px;
            font-weight: 700;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 15px;
            margin-left: 0px;
            padding-top: 0px;
            padding-right: 10px;
            padding-bottom: 0px;
            padding-left: 0px;
          }
          
          .text-blk.description {
            font-size: 18px;
            line-height: 26px;
            color: rgb(102, 102, 102);
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 50px;
            margin-left: 0px;
            font-weight: 400;
            padding-top: 0px;
            padding-right: 10px;
            padding-bottom: 0px;
            padding-left: 0px;
          }
          
          .explore {
            font-size: 16px;
            line-height: 28px;
            color: rgb(102, 102, 102);
            border-top-width: 2px;
            border-right-width: 2px;
            border-bottom-width: 2px;
            border-left-width: 2px;
            border-top-style: solid;
            border-right-style: solid;
            border-bottom-style: solid;
            border-left-style: solid;
            border-top-color: rgb(102, 102, 102);
            border-right-color: rgb(102, 102, 102);
            border-bottom-color: rgb(102, 102, 102);
            border-left-color: rgb(102, 102, 102);
            border-image-source: initial;
            border-image-slice: initial;
            border-image-width: initial;
            border-image-outset: initial;
            border-image-repeat: initial;
            cursor: pointer;
            background-color: white;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            padding-top: 8px;
            padding-right: 40px;
            padding-bottom: 8px;
            padding-left: 40px;
          }
          
          .explore:hover {
            background-image: initial;
            background-position-x: initial;
            background-position-y: initial;
            background-size: initial;
            background-repeat-x: initial;
            background-repeat-y: initial;
            background-attachment: initial;
            background-origin: initial;
            background-clip: initial;
            background-color: rgb(176, 98, 255);
            color: white;
            border-top-width: initial;
            border-right-width: initial;
            border-bottom-width: initial;
            border-left-width: initial;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            border-left-style: none;
            border-top-color: initial;
            border-right-color: initial;
            border-bottom-color: initial;
            border-left-color: initial;
            border-image-source: initial;
            border-image-slice: initial;
            border-image-width: initial;
            border-image-outset: initial;
            border-image-repeat: initial;
          }
          
          .responsive-container-block.Container {
            margin-top: 80px;
            margin-right: auto;
            margin-bottom: 50px;
            margin-left: auto;
            justify-content: center;
            align-items: center;
            max-width: 1320px;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
          }
          
          .responsive-container-block.Container.bottomContainer {
            flex-direction: row-reverse;
            margin-top: 80px;
            margin-right: auto;
            margin-bottom: 50px;
            margin-left: auto;
            position: static;
          }
          
          .allText.aboveText {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 40px;
          }
          
          .allText.bottomText {
            margin-top: 0px;
            margin-right: 40px;
            margin-bottom: 0px;
            margin-left: 0px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding-top: 0px;
            padding-right: 15px;
            padding-bottom: 0px;
            padding-left: 0px;
          }
          
          .purpleBox {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            max-width: 430px;
            background-color: rgb(176, 98, 255);
            padding-top: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            position: absolute;
            bottom: -35px;
            left: -8%;
          }
          
          .purpleText {
            font-size: 18px;
            line-height: 26px;
            color: white;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 10px;
            margin-left: 0px;
          }
          
          .ultimateImg {
            width: 50%;
            position: relative;
          }
          
          @media (max-width: 1024px) {
            .responsive-container-block.Container {
              max-width: 850px;
            }
          
            .mainImg {
              width: 55%;
              height: auto;
            }
          
            .allText {
              width: 40%;
              margin-top: 0px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 20px;
            }
          
            .responsive-container-block.bigContainer {
              padding-top: 10px;
              padding-right: 10px;
              padding-bottom: 10px;
              padding-left: 10px;
            }
          
            .responsive-container-block.Container.bottomContainer {
              margin-top: 80px;
              margin-right: auto;
              margin-bottom: 50px;
              margin-left: auto;
            }
          
            .responsive-container-block.Container {
              max-width: 830px;
            }
          
            .allText.aboveText {
              margin-top: 30px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 40px;
            }
          
            .allText.bottomText {
              margin-top: 30px;
              margin-right: 40px;
              margin-bottom: 0px;
              margin-left: 0px;
              text-align: left;
            }
          
            .text-blk.headingText {
              text-align: center;
            }
          
            .allText.aboveText {
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              margin-top: 30px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
            }
          
            .text-blk.subHeadingText {
              text-align: left;
              font-size: 26px;
              line-height: 32px;
            }
          
            .text-blk.description {
              text-align: left;
              line-height: 24px;
            }
          
            .explore {
              margin-top: 0px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
            }
          
            .responsive-container-block.bigContainer {
              padding-top: 10px;
              padding-right: 30px;
              padding-bottom: 10px;
              padding-left: 30px;
            }
          
            .responsive-container-block.Container {
              justify-content: space-evenly;
            }
          
            .purpleBox {
              bottom: 10%;
            }
          
            .responsive-container-block.Container.bottomContainer {
              padding-top: 10px;
              padding-right: 0px;
              padding-bottom: 10px;
              padding-left: 0px;
              max-width: 930px;
            }
          
            .allText.bottomText {
              width: 40%;
            }
          
            .purpleBox {
              bottom: auto;
              left: -10%;
              top: 70%;
            }
          
            .mainImg {
              width: 100%;
            }
          
            .text-blk.headingText {
              text-align: left;
            }
          }
          
          @media (max-width: 768px) {
            .allText {
              width: 100%;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              padding-top: 0px;
              padding-right: 0px;
              padding-bottom: 0px;
              padding-left: 0px;
            }
          
            .responsive-container-block.Container {
              flex-direction: column;
              height: auto;
            }
          
            .text-blk.headingText {
              text-align: center;
            }
          
            .text-blk.subHeadingText {
              text-align: center;
              font-size: 24px;
            }
          
            .text-blk.description {
              text-align: center;
              font-size: 18px;
            }
          
            .allText {
              margin-top: 40px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
            }
          
            .allText.aboveText {
              margin-top: 40px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
            }
          
            .responsive-container-block.Container {
              margin-top: 80px;
              margin-right: auto;
              margin-bottom: 50px;
              margin-left: auto;
            }
          
            .responsive-container-block.Container.bottomContainer {
              margin-top: 50px;
              margin-right: auto;
              margin-bottom: 50px;
              margin-left: auto;
            }
          
            .allText.bottomText {
              margin-top: 40px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
            }
          
            .mainImg {
              width: 100%;
              margin-top: 0px;
              margin-right: 0px;
              margin-bottom: -70px;
              margin-left: 0px;
            }
          
            .responsive-container-block.Container.bottomContainer {
              flex-direction: column;
            }
          
            .ultimateImg {
              width: 100%;
            }
          
            .purpleBox {
              position: static;
            }
          
            .allText.bottomText {
              width: 100%;
              align-items: flex-start;
            }
          
            .text-blk.headingText {
              text-align: left;
            }
          
            .text-blk.subHeadingText {
              text-align: left;
            }
          
            .text-blk.description {
              text-align: left;
            }
          
            .ultimateImg {
              position: static;
            }
          
            .mainImg {
              margin-top: 0px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
            }
          
            .ultimateImg {
              position: relative;
            }
          
            .purpleBox {
              margin-top: 0px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
              position: absolute;
              left: 0px;
              top: 80%;
            }
          
            .allText.bottomText {
              margin-top: 100px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
            }
          }
          
          @media (max-width: 500px) {
            .responsive-container-block.Container {
              padding-top: 10px;
              padding-right: 0px;
              padding-bottom: 10px;
              padding-left: 0px;
              width: 100%;
              max-width: 100%;
            }
          
            .mainImg {
              width: 100%;
            }
          
            .responsive-container-block.bigContainer {
              padding-top: 10px;
              padding-right: 25px;
              padding-bottom: 10px;
              padding-left: 25px;
            }
          
            .text-blk.subHeadingText {
              font-size: 24px;
              padding-top: 0px;
              padding-right: 0px;
              padding-bottom: 0px;
              padding-left: 0px;
              line-height: 28px;
            }
          
            .text-blk.description {
              font-size: 16px;
              padding-top: 0px;
              padding-right: 0px;
              padding-bottom: 0px;
              padding-left: 0px;
              line-height: 22px;
            }
          
            .allText {
              padding-top: 0px;
              padding-right: 0px;
              padding-bottom: 0px;
              padding-left: 0px;
              width: 100%;
            }
          
            .allText.bottomText {
              margin-top: 50px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
              padding: 0 0 0 0;
              margin: 30px 0 0 0;
            }
          
            .ultimateImg {
              position: static;
            }
          
            .purpleBox {
              position: static;
            }
          
            .stars {
              width: 55%;
            }
          
            .allText.bottomText {
              margin-top: 75px;
              margin-right: 0px;
              margin-bottom: 0px;
              margin-left: 0px;
            }
          
            .responsive-container-block.bigContainer {
              padding-top: 10px;
              padding-right: 20px;
              padding-bottom: 10px;
              padding-left: 20px;
            }
          
            .purpleText {
              font-size: 16px;
              line-height: 22px;
            }
          
            .explore {
              padding: 6px 35px 6px 35px;
              font-size: 15px;
            }
          }
    </style>
</head>
<body>
    <div class="responsive-container-block bigContainer">
        <div class="responsive-container-block Container bottomContainer">
          <div class="ultimateImg">
            <img class="mainImg" src="pics/buss.png  ">
            <div class="purpleBox">
              <p class="purpleText">
                Only have positive things to say about our experience.
Bus was clean, the driver always on time, and very courteous and professional. Would use them again.
              </p>
              <img class="stars" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/mp5.svg">
            </div>
          </div>
          <div class="allText bottomText">
            <p class="text-blk headingText">
              About Us
            </p>
            <p class="text-blk subHeadingText">
                ABC BUS the most outstanding in land transport in Jordan

            </p>
            <p class="text-blk description">
                The Jordan Express Tourist Transportation Company is a high standard safe, secure and punctual public transportation and tourism bus service system established in 1964.
                The company emerged as a long search for a corporate transport entity that is willing to provide first-class service. ABC BUS is aiming to provide a variety of different services to be integrated in different fields of the transportation and tourism sector in order to maintain a strong position in Jordan. These years have been characterized by new innovations and inventions, marking ABC BUS as the most outstanding in land transport in Jordan.
                
                The arrival of ABC BUS into the Jordanian market has brought in a revolution within the transport and tourism sector in Jordan. The frame of mind from the start introduced commitment to the industry, by contributing to the transportation market and introducing the latest means of operations in road passenger transportation. ABC BUS is willing to conquer ever known barrier to provide highly convenient services for passengers seeking easy access to local and international destinations. ABC BUS has been able to withstand the competition through state of the art operations. Introducing innovation, quality service backed by marketing and advertising strategies ABC BUS has been the leader in tourism transport in Jordan. In addition, measures of departure and arrival time, quality service, friendly environment are of high importance.
                
                            </p>
            <a class="explore" href="index.php">
               View Services
            </a>
          </div>
        </div>
      </div>
</body>
</html>