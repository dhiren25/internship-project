import React from 'react';
import { Link } from 'react-router-dom';
import Breadcrumb from 'react-bootstrap/Breadcrumb';
import './index.css';
import Table from 'react-bootstrap/Table';
// import wishlist from '../../assets/img/wishlist.png'

const WishboardReceive = () => {
    return (
        <>
            <div className="d-flex align-items-center justify-content-between">
                <div className="d-flex align-items-center">
                {/* <img src={wishlist} className="me-3 wishboard_icon"/> */}
                    {/* <i className="fa-solid fa-table me-3 fs-4 heading-icon"></i> */}
                    <h5 className='m-0 heading_board'>Received Wishboard</h5>
                </div>
                <div className="btn btn-primary home_btn">
                    <Link to="/home"><i className="fa-solid fa-pencil"></i>Start A New Card</Link>
                </div>
            </div>
            <hr />
            <div className="breadcrumb-list mt-3">
                <Breadcrumb>
                    <Breadcrumb.Item href="/category">Dashboard</Breadcrumb.Item>
                    <Breadcrumb.Item active>Recived Wishboard</Breadcrumb.Item>
                </Breadcrumb>
            </div>
            <div className='board_table mt-4'>
                <Table bordered>
                    <thead className='table_header'>
                        <tr>
                            <th>Title</th>
                            <th>Sender Name</th>
                            <th>Received Date</th>
                            <th>View</th>
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

export default WishboardReceive;