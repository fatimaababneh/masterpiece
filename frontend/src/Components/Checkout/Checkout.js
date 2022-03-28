import React,{useEffect, useState} from 'react';
import axios from 'axios';
import './Checkout.css'
import {Link} from 'react-router-dom';


function Checkout() {

    const [currentuser, setCurrentuser]=useState(localStorage.getItem("loggeduser")?JSON.parse(localStorage.getItem("loggeduser")):[]);

    const orderhandler=(e)=>{
        e.preventDefault();

         let total = currentuser.cart.reduce((total,item) => total + item.quantity * item.price, 0)
        console.log(total);

        let placeorder={full_name:e.target.name.value,
        phone_number: e.target.number.value,
        address: e.target.address.value,
        city: e.target.city.value,
        note:e.target.note.value,
        total_price: total,
        user_id:currentuser.id,
        cart: currentuser.cart
        };       

        axios.post('http://localhost:8000/api/check', placeorder)
        .then(response=>{
           console.log(response.data)
        
        });
       
    }
    return(
    <div>

    <div className='container-check'>

        <div className='checkform-style'>

            <form className='check-form' onSubmit={(e)=>orderhandler(e)}>
              <h2>Checkout</h2>
              <span >Shipping Adress</span>
              <div> 
                <input type='text' placeholder='Full Name' name='name'>
                </input><input type='text'  placeholder='Phone Number' name='number'></input>
              </div>
              
              <input type='address' placeholder='Address' name='address'></input>
              <input type='text'  placeholder='City' name='city'></input>
              <input type='textarea'  placeholder='Note' name='note'></input>
              <button >Place Your Order</button>

            </form>

        </div>

    </div>
            
    </div>);
}
export default Checkout