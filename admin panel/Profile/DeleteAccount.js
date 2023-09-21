import React from 'react';
import { Link } from 'react-router-dom';
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';
import Breadcrumb from 'react-bootstrap/Breadcrumb';
import './index.css';
// import Delete from '../../assets/img/delete.png';
import Swal from "sweetalert2";
const DeleteAccount = () => {
    const handleAccountDelete = () =>{
        Swal.fire({
            title: 'Do you really want to Delete your account',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            denyButtonText: `NO`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              Swal.fire('Deleted succesfully', '', 'success')
            } else if (result.isDenied) {
              
            }
          })
    }
    return (
        <>
            <div className="d-flex align-items-center justify-content-between">
                <div className="d-flex align-items-center">
                    {/* <i className="fa-solid fa-trash me-3 fs-4 heading-icon"></i> */}
                    {/* <img src={Delete} className="me-3 heading-icon"/> */}
                    <h5 className='m-0 heading_board'>Delete Account</h5>
                </div>
                <div className="btn btn-primary home_btn">
                    <Link to="/home"><i className="fa-solid fa-pencil"></i>Start A New Card</Link>
                </div>
            </div>
            <hr />
            <div className="breadcrumb-list mt-3">
                <Breadcrumb>
                    <Breadcrumb.Item href="/category">Dashboard</Breadcrumb.Item>
                    <Breadcrumb.Item active>Delete Account</Breadcrumb.Item>
                </Breadcrumb>
            </div>
            <div className="account-box-design change_psw">
                <form>
                    <Form.Group className="mb-4 modal-form">
                        <Form.Control type="email" placeholder='Enter Your Email' />
                    </Form.Group>
                    <Button type="button" className="home_btn me-2 wishboard_btn" onClick={()=>handleAccountDelete()}>Delete Account</Button>
                </form>
            </div>
        </>
    )
}

export default DeleteAccount;