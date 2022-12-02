import React from 'react'

function Home(props) {
    return (
        <div>

            <h1>Home Component</h1>
            <div className="cart-wrapper">
                <div className="img-wrapper item">
                    <img src="https://www.koodomobile.com/sites/default/files/styles/product_image/public/iphone_14_blue_pdp_image_position-1a_caen.png?itok=bEZ3mPId" />
                </div>
                <div className="text-wrapper item">
                    <span>
                        I-Phone
                    </span>
                    <span>
                        Price: $1000.00
                    </span>
                </div>
                <div className="btn-wrapper item">
                    <button onClick={
                            () => { props.addToCartHandler({ pice: 1000, name: 'i phone 11' }) }
                        }>
                        Add To Cart</button>
                    <button onClick={
                            () => { props.removeToCartHandler() }
                        }>
                        Remove</button>
                </div>
            </div>
        </div>
    )
}
export default Home