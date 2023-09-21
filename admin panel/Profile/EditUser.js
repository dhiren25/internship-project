import React from 'react'
import { useForm } from "react-hook-form";
import * as yup from "yup";
import { yupResolver } from "@hookform/resolvers/yup";
import { useDispatch } from 'react-redux';
// import { UpdateUser } from '../../actions';
import { Button, Col, Form, Modal } from 'react-bootstrap';
import moment from "moment";
function EditUser({userData,show,onHide}) {
    const updateSchema = yup.object().shape({
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

    const dispatch = useDispatch();
    const handleReset = () =>{
        document.getElementById("UpdateUserForm").reset();
        onHide();
    }
    const onSubmit = (data) => {
        dispatch(({...data,user_id:userData.user_id},handleReset))
    };
    const { register, handleSubmit,watch, formState: { errors } } = useForm({mode: "all",
    resolver: yupResolver(updateSchema),
    defaultValues: {
        customer_id: localStorage.getItem("customer_id"),
      },
  });
  const isMarried = watch('married_status');
  return (
    <Modal show={show} onHide={onHide} centered>
            <Modal.Body className="section-title-area sign-in-modal">
            <h2 className="text-center mb-5"><span className="title-design position-relative">Update</span> User</h2>
    <Form  id="UpdateUserForm" className='d-flex align-items-center flex-wrap account-form' onSubmit={handleSubmit(onSubmit)}>
                      <Form.Group className="mb-3 modal-form">
                          <Form.Label>First Name</Form.Label>
                          <Form.Control aria-invalid={errors.firstname ? "true" : "false"} type="text" placeholder='Enter Your First Name' {...register("firstname",{required:true})} defaultValue={userData?.firstname}/>
                      </Form.Group>
                      <Form.Group className="mb-3 modal-form">
                          <Form.Label>Last Name</Form.Label>
                          <Form.Control aria-invalid={errors.lastname ? "true" : "false"} type="text" placeholder='Enter Last Name'  {...register("lastname",{required:true})} defaultValue={userData?.lastname}/>
                      </Form.Group>
                      <Form.Group className="mb-3 modal-form">
                          <Form.Label>Email</Form.Label>
                          <Form.Control aria-invalid={errors.email ? "true" : "false"} type="email" placeholder='Enter Your Email'  {...register("email",{required:true})} defaultValue={userData?.email}/>
                      </Form.Group>
                      <Form.Group className="mb-3 modal-form">
                          <Form.Label>Date Of Birth</Form.Label>
                          <Form.Control aria-invalid={errors.bod ? "true" : "false"} type="date" placeholder='Enter Your Birth Date'   {...register("bod",{required:true})} defaultValue={moment(userData.bod, 'DD-MM-YYYY').format('YYYY-MM-DD')}/>
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
                                <Form.Control aria-invalid={errors.marriage_date ? "true" : "false"} type="date" placeholder='Enter Your Marriage Date'  {...register("marriage_date")} defaultValue={moment(userData.marriage_date, 'DD-MM-YYYY').format('YYYY-MM-DD')}/>
                            </Form.Group>
                            )
                        }

                      <Col lg={12}>
                          <div className="d-flex justify-content-center">
                             <Button type="submit" className="mt-3 home_btn">Submit</Button>
                          </div>
                      </Col>
                  </Form>
                  </Modal.Body>
                  </Modal>
  )
}

export default EditUser