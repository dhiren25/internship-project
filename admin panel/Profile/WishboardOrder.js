import React from 'react';
import { Link } from 'react-router-dom';
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';
import './index.css';
import Table from 'react-bootstrap/Table';
// import wishlist from '../../assets/img/wishlist.png'


const WishboardOrder = () => {

    return (
        <>
            <div className="d-flex align-items-center justify-content-between">
                <div className="d-flex align-items-center">
                {/* <img src={wishlist} className="me-3 wishboard_icon"/> */}
                    {/* <i className="fa-solid fa-table me-3 fs-4 heading-icon"></i> */}
                    <h5 className='m-0 heading_board'>Wish Board Orders</h5>
                </div>
                <div className="btn btn-primary home_btn">
                    <Link to="/home"><i className="fa-solid fa-pencil"></i>Start A New Card</Link>
                </div>
            </div>
            <hr />
            <div className="account-box-design change_psw">
                <form className="d-flex align-items-center order-flex">
                    <Form.Group className="me-2 modal-form">
                        <Form.Control type="text" placeholder='Recipient Name' />
                    </Form.Group>
                    <Form.Group className="me-2 modal-form">
                        <Form.Control type="email" placeholder='Recipient Email' />
                    </Form.Group>
                    <Form.Group className="me-2 modal-form">
                        <Form.Control type="date" />
                    </Form.Group>
                    <Form.Select aria-label="Default select example" className='modal-form me-2'>
                        <option>Status</option>
                        <option value="1">Status</option>
                        <option value="2">Scheduled</option>
                        <option value="3">Not Scheduled</option>
                        <option value="3">Delivered</option>
                    </Form.Select>
                    <Button type="button" className="home_btn me-2 wishboard_btn">Filter</Button>
                    <Button type="button" className="btn-dark home_btn wishboard_btn">Cancel</Button>
                </form>
            </div>
            <div className='board_table mt-5'>
                <Table bordered>
                    <thead className='table_header'>
                        <tr>
                            <th>Title</th>
                            <th>Recipient Name</th>
                            <th>Status</th>
                            <th>Card Type</th>
                            <th>Upgrade</th>
                            <th>Edit Details</th>
                            <th>More Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </Table>
            </div>
        </>
    )
}

export default WishboardOrder;