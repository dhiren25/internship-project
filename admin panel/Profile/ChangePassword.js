import React from 'react';
import { Link } from 'react-router-dom';
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';
import Breadcrumb from 'react-bootstrap/Breadcrumb';
import './index.css';
// import Lock from '../../assets/img/padlock.png'
import { useState } from 'react';
// import { changePassword } from '../../actions';
import { useDispatch, useSelector } from 'react-redux';
import { useForm } from "react-hook-form";
import * as yup from "yup";
import { yupResolver } from "@hookform/resolvers/yup";
const ChangePassword = () => {

    const dispatch = useDispatch();
    const authData = useSelector((state) => state.authentication)
    const passwordSchema = yup.object().shape({
        password: yup.string()
.required('No password provided.') 
.min(6, 'Password is too short - should be 6 chars minimum.')
.matches(/[a-zA-Z0-9]/, 'Password can only contain Latin letters.'),
confirm: yup.string()
   .oneOf([yup.ref('password'), null], 'Passwords must match'),
    });

  const { register, handleSubmit,watch, formState: { errors },reset } = useForm({mode: "all",
  resolver: yupResolver(passwordSchema)
});

  const onSubmit = (data) => {
  
               dispatch(({customer_id:authData.loggedinData.customer_id,...data},handleSuccess))
  };

 const handleSuccess = () =>{
  
 }
    return (
        <>
           <div className="d-flex align-items-center justify-content-between">
                <div className="d-flex align-items-center">
                    {/* <i className="fa-solid fa-lock me-3 fs-4 heading-icon"></i> */}
                    {/* <img src={Lock} className="me-3 heading-icon"/> */}
                    <h5 className='m-0 heading_board'>Change Password</h5>
                </div>
                <div className="btn btn-primary home_btn">
                    <Link to="/home"><i className="fa-solid fa-pencil"></i>Start A New Card</Link>
                </div>
            </div>
            <hr />
            <div className="breadcrumb-list mb-3">
                <Breadcrumb>
                    <Breadcrumb.Item href="/category">Dashboard</Breadcrumb.Item>
                    <Breadcrumb.Item active>Change Password</Breadcrumb.Item>
                </Breadcrumb>
            </div>
            <div className="account-box-design change_psw">
            <Form onSubmit={handleSubmit(onSubmit)}>
            <Form.Group className="mb-3 modal-form" controlId="formBasicPassword">
                        <Form.Label>Password</Form.Label>
                        <Form.Control type="password" placeholder="Enter New Password" {...register("password",{required:true})} />
                        <p className='form-error-message'>{errors.password?.message}</p>
                    </Form.Group>
                    <Form.Group className="mb-3 modal-form" controlId="formBasicPassword">
                        <Form.Label>Confirm Password</Form.Label>
                        <Form.Control id="confirm" type="password" placeholder="Reenter New Password" {...register("confirm",{required:true})}/>
                        <p className='form-error-message'>{errors.confirm?.message}</p>
                    </Form.Group>
                   
                    
                    <Button variant="primary" type="submit" className="mt-3">
                        Change Password
                    </Button>
                </Form>
                
            </div>
        </>
    )
}

export default ChangePassword;