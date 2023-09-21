import React from 'react';
import { Link } from 'react-router-dom';
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';
import './index.css';
// import { Col, Row } from 'react-bootstrap';
// import User from '../../assets/img/user.png';
// import Expiry from '../../assets/img/expiry.png';
// import Clock from '../../assets/img/timetable.png';
// import Assign from '../../assets/img/assignment.png';
import { useDispatch, useSelector } from 'react-redux';
import { useForm } from "react-hook-form";
import * as yup from "yup";
import { yupResolver } from "@hookform/resolvers/yup";
// import { UpdateProfile } from '../../actions';
import { toast } from 'react-toastify';
import { Row, Col } from 'react-bootstrap';


const UserProfile = () => {
    const dispatch = useDispatch();
    const phoneRegExp = /^((\\+[1-9]{1,4}[ \\-]*)|(\\([0-9]{2,3}\\)[ \\-]*)|([0-9]{2,4})[ \\-]*)*?[0-9]{3,4}?[ \\-]*[0-9]{3,4}?$/
    const signupSchema = yup.object().shape({
        firstname: yup
            .string()
            .min(3, "First name should contain at least 3 characters")
            .required("Please Enter your First Name"),
        lastname: yup
            .string()
            .required("Please Enter your Last Name"),
        email: yup
            .string().email()
            .required("Please Enter Email"),
        telephone: yup.string().matches(phoneRegExp, 'Phone number is not valid')
    });
    const { register, handleSubmit, watch, formState: { errors }, reset } = useForm({
        mode: "all",
        resolver: yupResolver(signupSchema)
    });
    // const authData = useSelector(state => state.authentication.loggedinData);

    // const onSubmit = (data) => {
    //     if (authData.firstname !== data.firstname || authData.lastname !== data.lastname || authData.email !== data.email || authData.telephone !== data.telephone) {
    //         console.log(data);
    //         dispatch(({ ...data, customer_id: authData.customer_id }))
    //     } else {
    //         toast.error("Edit data in order to update")
    //     }

    // }
    return (
        <>
            <div className="d-flex align-items-center justify-content-between">
                <div className="d-flex align-items-center profile_heading_design">
                    {/* <img src={User} className="me-3 heading-icon" alt='' /> */}
                    {/* <i className="fa-solid fa-user me-3 fs-4 heading-icon"></i> */}
                    <h5 className='m-0 heading_board'>{localStorage.getItem("firstname") + "  " + localStorage.getItem("lastname")}</h5>
                </div>
                <div className="btn btn-primary home_btn">
                    <Link to="/home"><i className="fa-solid fa-house"></i>Home</Link>
                </div>
            </div>
            <hr className='horizontal_line' />
            <div className='account-box-design'>
                <p className='text-dark'>NO ACTIVE PACK: SAVE UPTO 70% With PREPAID PACKS.<Link to="/pricing" className='details_link'>VIEW PLAN DETAILS</Link></p>
                <hr />
                <Row>
                    <Col lg={4} md={6} sm={6}>
                        <div className='d-flex align-items-center flex-row icon-box-design'>
                            {/* <span className='profile_list'><img src={Clock} className="me-3" alt=''/></span> */}
                            <div className='d-flex flex-column text-left'>
                                <h2 className='m-0 text-start'>0</h2>
                                <span>Credits Left</span>
                            </div>
                        </div>
                    </Col>
                    <Col lg={4} md={6} sm={6}>
                        <div className='d-flex align-items-center flex-row icon-box-design'>
                            {/* <span className='profile_list'><img src={Assign} className="me-3" alt=''/></span> */}
                            <div className='d-flex flex-column text-left'>
                                <h2 className='m-0 text-start'>0</h2>
                                <span>Assigned Credits</span>
                            </div>
                        </div>
                    </Col>
                    <Col lg={4} md={6} sm={6} className="mx-auto">
                        <div className='d-flex align-items-center flex-row icon-box-design'>
                            {/* <span className='profile_list'><img src={Expiry} className="me-3" alt=''/></span> */}
                            <div className='d-flex flex-column text-left'>
                                <h2 className='m-0 text-start'>0</h2>
                                <span>Expiry Date</span>
                            </div>
                        </div>
                    </Col>
                </Row>
            </div>
            <div className="account-setting account-box-design">
                <h4 className='mb-3'>Account Settings</h4>
                <form className='d-flex align-items-center flex-wrap account-form'>
                    <Form.Group className="mb-3 modal-form" controlId="formBasicEmail">
                        <Form.Label>First Name</Form.Label>
                        <Form.Control aria-invalid={errors.firstname ? "true" : "false"}  type="text" placeholder="Enter Name" {...register("firstname", { required: true })} />
                        <p className='form-error-message mt-1'>{errors.firstname?.message}</p>
                    </Form.Group>
                    <Form.Group className="mb-3 modal-form" controlId="formBasicEmail">
                        <Form.Label>Last Name</Form.Label>
                        <Form.Control aria-invalid={errors.lastname ? "true" : "false"}  type="text" placeholder="Enter Name" {...register("lastname", { required: true })} />
                        <p className='form-error-message mt-1'>{errors.lastname?.message}</p>
                    </Form.Group>
                    <Form.Group className="mb-3 modal-form" controlId="formBasicPassword">
                        <Form.Label>Email</Form.Label>
                        <Form.Control aria-invalid={errors.email ? "true" : "false"} type="email" placeholder="Enter Email" {...register("email", { required: true })} />
                        <p className='form-error-message mt-1'>{errors.email?.message}</p>
                    </Form.Group>
                    <Form.Group className="mb-3 modal-form" controlId="formBasicPassword">
                        <Form.Label>Telephone</Form.Label>
                        <Form.Control aria-invalid={errors.telephone ? "true" : "false"} type="telephone" placeholder="Phone number" {...register("telephone", { required: true })} />
                        <p className='form-error-message mt-1'>{errors.telephone?.message}</p>
                    </Form.Group>
    

                    <Button type="submit" className="mt-3 home_btn">Update</Button>
                </form>
            </div>
            <div className='account-setting'>
                <h4 className='mb-4 mt-lg-5 mt-md-5 mt-sm-5'>Email Notification Settings</h4>
                <div className='d-flex align-items-center justify-content-between'>
                    <div className='notification_text'>
                        <span>Features & Updates</span>
                        <p>Updates about new features and more.</p>
                    </div>
                    <div className="pricing-toggle-btn user_toggle">
                        <label className="switch">
                            <input type="checkbox" />
                            <span className="slider round"></span>
                        </label>
                    </div>
                </div>
                <div className='d-flex align-items-center justify-content-between'>
                    <div className='notification_text'>
                        <span>Marketing & Promotional</span>
                        <p>Updates about new offers and discounts.</p>
                    </div>
                    <div className="pricing-toggle-btn user_toggle">
                        <label className="switch">
                            <input type="checkbox" />
                            <span className="slider round"></span>
                        </label>
                    </div>
                </div>
                <div className='d-flex align-items-center justify-content-between'>
                    <div className='notification_text'>
                        <span>Events Reminders</span>
                        <p>Get reminders on upcoming birthdays,work anniversaries and other events.</p>
                    </div>
                    <div className="pricing-toggle-btn user_toggle">
                        <label className="switch">
                            <input type="checkbox" />
                            <span className="slider round"></span>
                        </label>
                    </div>
                </div>
                <Button type="button" className="mt-3 home_btn">Update</Button>
            </div>
        </>
    )
}

export default UserProfile;