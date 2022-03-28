import React,{useEffect, useState} from 'react';
import "./Heroimg.css";
import Carousel from 'react-bootstrap/Carousel';

function Hero() {
  
  return (
    <div>
      <div>
        {/* <div
          className="hero-img"
          style={{
            background: `linear-gradient(190deg, #ffffff , rgba(0, 0, 1, 0)), url('https://flo.health/uploads/media/sulu-1200x630/09/2349-A%20baby%20sleeping%20in%20a%20crib%20that%E2%80%99s%20free%20of%20pillows.jpg?v=1-0&inline=1')`,
            backgroundRepeat: "no-repeat",
            backgroundSize: "cover",
            backgroundPosition: "center",
          }} 
        >
          <div className="content">
          <h1 id="animate" class="animate__animated animate__bounce">Care about your baby</h1>
          </div>
          
        </div> */}
        <div class="col-md-5 mr-1" style={{marginRight:"4%",marginLeft:"4%"}}>
            
        
      
            <Carousel>
              <Carousel.Item interval={1500}>
                <img
                  className="d-block w-100"
      src='https://i5.walmartimages.com/asr/c1cf6814-3cd8-446a-a039-d5f307e0ae3a.062dda1e41f9d51033f1a935508cb203.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF'
                  alt="Image"
                />
            
              </Carousel.Item>
              <Carousel.Item interval={1500}>
                <img
                  className="d-block w-100"
      src='https://i5.walmartimages.com/asr/c1cf6814-3cd8-446a-a039-d5f307e0ae3a.062dda1e41f9d51033f1a935508cb203.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF'
                  alt="Image "
                />
               
              </Carousel.Item>
              <Carousel.Item interval={1500}>
                <img
                  className="d-block w-100"
      src='https://i5.walmartimages.com/asr/c1cf6814-3cd8-446a-a039-d5f307e0ae3a.062dda1e41f9d51033f1a935508cb203.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF'
                  alt="Image "
                />
              </Carousel.Item>
              <Carousel.Item interval={1500}>
                <img
                  className="d-block w-100"
      src='https://i5.walmartimages.com/asr/c1cf6814-3cd8-446a-a039-d5f307e0ae3a.062dda1e41f9d51033f1a935508cb203.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF'
                  alt="Image "
                />
              </Carousel.Item>
            </Carousel>
            </div>
      </div>
    </div>
  );
}

export default Hero;
