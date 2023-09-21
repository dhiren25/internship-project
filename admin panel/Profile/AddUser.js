import React, { useEffect, useState } from "react";
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';
import { useDispatch, useSelector } from 'react-redux';
import './index.css';
// import { UserProcess } from "../../actions";
import { Col } from "react-bootstrap";
import { useForm } from "react-hook-form";
import * as yup from "yup";
import { yupResolver } from "@hookform/resolvers/yup";
const userSchema = yup.object().shape({
    customer_id:yup.string(),
    firstname: yup
      .string()
      .min(3, "First name should contain at least 3 characters")
      .required("Please Enter your First Name"),
    lastname: yup
      .string()
      .required("Please Enter your Last Name"),
      email:yup
      .string().email()
      .required("Please Enter Email"),
      mobile_num:yup
      .number()
      .required("Please Enter Mobile No"),
      bod:yup
      .string().transform((value, originalValue) => {
        
        if (originalValue) {

            const dateObj = new Date(originalValue);
            const day = dateObj.getDate().toString().padStart(2, '0');
            const month = (dateObj.getMonth() + 1).toString().padStart(2, '0');
            const year = dateObj.getFullYear().toString();
            const formattedDate = `${day}-${month}-${year}`;
            console.log('Formatted date:', formattedDate);
            return formattedDate;
        }
        return null;
      })
      .required('Date is required'),
      married_status: yup.number().oneOf([0, 1]).default(0),

    marriage_date:yup
    .string().transform((value, originalValue) => {
        
        if (originalValue) {

            const dateObj = new Date(originalValue);
            const day = dateObj.getDate().toString().padStart(2, '0');
            const month = (dateObj.getMonth() + 1).toString().padStart(2, '0');
            const year = dateObj.getFullYear().toString();
            const formattedDate = `${day}-${month}-${year}`;
            console.log('Formatted date:', formattedDate);
            return formattedDate;
        }
        return null;
      }),
  });
const AddUser = ({isUpdate = false,userData}) => {
    const dispatch = useDispatch();
    
  
    const handleReset = () =>{
        document.getElementById("AddUserForm").reset();
    }
    const onSubmit = (data) => {
        dispatch((data,handleReset))
    };

      const { register, handleSubmit,watch, formState: { errors } } = useForm({mode: "all",
    resolver: yupResolver(userSchema),
    defaultValues: {
        customer_id: localStorage.getItem("customer_id"),
      },
  });
  const isMarried = watch('married_status');
    return (
        <>
             <section className='adduser_field_area'>
                <div className="account-setting account-box-design">
                    <h4 className='mb-3'>Add User</h4>
                  <Form  id="AddUserForm" className='d-flex align-items-center flex-wrap account-form' onSubmit={handleSubmit(onSubmit)}>
                        <Form.Group className="mb-3 modal-form">
                            <Form.Label>First Name</Form.Label>
                            <Form.Control aria-invalid={errors.firstname ? "true" : "false"} type="text" placeholder='Enter Your First Name' {...register("firstname",{required:true})} />
                        </Form.Group>
                        <Form.Group className="mb-3 modal-form">
                            <Form.Label>Last Name</Form.Label>
                            <Form.Control aria-invalid={errors.lastname ? "true" : "false"} type="text" placeholder='Enter Last Name'  {...register("lastname",{required:true})}/>
                        </Form.Group>
                        <Form.Group className="mb-3 modal-form">
                            <Form.Label>Email</Form.Label>
                            <Form.Control aria-invalid={errors.email ? "true" : "false"} type="email" placeholder='Enter Your Email'  {...register("email",{required:true})}/>
                        </Form.Group>
                        <Form.Group className="mb-3 modal-form">
                            <Form.Label>Phone Number</Form.Label>
                            <Form.Control aria-invalid={errors.mobile_num ? "true" : "false"} type="tel" placeholder='Enter Your Number'  {...register("mobile_num",{required:true})}/>
                        </Form.Group>
                        <Form.Group className="mb-3 modal-form">
                            <Form.Label>Date Of Birth</Form.Label>
                            <Form.Control aria-invalid={errors.bod ? "true" : "false"} type="date" placeholder='Enter Your Birth Date'   {...register("bod",{required:true})}/>
                        </Form.Group>
                       
                        <Form.Group className="mb-3 modal-form">
                            <Form.Label>Married Status</Form.Label>
                            <Form.Select aria-label="User Married Status" aria-invalid={errors.married_status ? "true" : "false"} className="form-control"   {...register("married_status",{required:true})}>
                                <option disabled selected>Open this select menu</option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </Form.Select>
                        </Form.Group>
                        {
                            isMarried === '1' && (
                                <Form.Group className="mb-3 modal-form">
                                <Form.Label>Marriage Date</Form.Label>
                                <Form.Control aria-invalid={errors.marriage_date ? "true" : "false"} type="date" placeholder='Enter Your Marriage Date'  {...register("marriage_date")}/>
                            </Form.Group>
                            )
                        }

                        <Col lg={12}>
                            <div className="d-flex justify-content-center">
                               <Button type="submit" className="mt-3 home_btn">Submit</Button>
                            </div>
                        </Col>
                    </Form>
                </div>
            </section>
        </>
    )
}

export default AddUser;