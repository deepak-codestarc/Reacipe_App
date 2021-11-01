import React from "react";

function Home()
{
    return(
        <div>
        <div className="ADD_TO_CART">
        <img src='Add.png'  alt="BigCo Inc. logo" />


        </div> 

         <h1>Home Components</h1>

        <div className=" card_wrapper">

        <div className="img_wrapper item">

        <img src="abc.png"  alt="BigCo Inc. logo"/>

        </div>

        <div className="text_wrapper item">
        <span>
             I-phone
        </span>
        <span>
            Price: $1000.00
        </span>

       

        </div>
        <div className="btn_wrapper item">
        <button> ADD TO CART</button>

     

        </div>
        </div> 

        </div>
    );
}
export default Home;