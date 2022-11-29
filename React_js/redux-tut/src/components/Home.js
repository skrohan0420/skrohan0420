import React from "react";

const Home = () => {
    return ( 
        <div>
            <div className="cart-wrapper">
                <div className="img-wrapper item">
                    <img src='https://help.apple.com/assets/634D939C5E97521C571D4A74/634D93BB5E97521C571D4AAB/en_US/9dd475137bffee2536c3cdf9f49fc4f1.png' />
                </div>
                <div className="text-wrapper item">
                    <span>
                        I-Phone
                    </span>
                    <span>
                        Price $1000
                    </span>
                </div>
                <div className="btn-wrapper item">
                    <button>Add To Cart</button>
                </div>
            </div>
        </div>
    );
}
 
export default Home;