import React from 'react';
import { Link } from 'react-router-dom';
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';
import './index.css';
import Table from 'react-bootstrap/Table';
// import Order from '../../assets/img/order.png';
import { useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
// import { DeleteUsers, getUsers } from '../../actions';
// import EmptyState from '../../componants/EmptyState';
import * as FaIcons from "react-icons/fa";
import { useState } from 'react';
import EditUser from './EditUser';
import moment from "moment";

const UserList = () => {
    const dispatch = useDispatch();
    const UserList = useSelector((state) => state.invitedUser.data.data);
    const customer_id = JSON.parse(localStorage.getItem('customer_id'));
    const [userData,setUserData] = useState({});
    const [isEdit,setIsEdit] = useState(false);
    const [filteredData,setFilteredData] = useState([]);
    const [filter,setFilter] =useState({type:"none",searchterm:"none"});
    useEffect(()=>{
        setFilteredData(UserList);
    },[UserList]);
    useEffect(()=>{
        if(filter.type !== "none"){
            const newfilteredArray = UserList.
            filter(item => filter.type === "name" ? item.firstname.toLowerCase().includes(filter.searchterm.toLowerCase()) 
            : filter.type === "email" ? item.email.toLowerCase().includes(filter.searchterm.toLowerCase()) 
            : filter.type === "bod" ? item.bod.toLowerCase().includes(filter.searchterm.toLowerCase()):null)
            setFilteredData(newfilteredArray);

        }
        
    },[UserList,filter])
    
    useEffect(()=>{
        dispatch((customer_id))
    },[])
    const handleDelete = (id) =>{
        alert('test')
        dispatch((id));
    }
    const handleEdit = (data) =>{
        if(isEdit){
            setUserData({});
            setIsEdit(!isEdit)
        }else{
            setUserData(data);
            setIsEdit(!isEdit)
        }
    }
    const handleFilterChange = (type,value) =>{
        if(type === "bod"){
            console.log(value)
            setFilter({type:type,searchterm:moment(new Date(value), 'YYYY-DD-MM').format('DD-MM-YYYY')});
            
        }else{
            setFilter({type:type,searchterm:value});
        }

    }
    return (
        <>
            <div className="d-flex align-items-center justify-content-between">
                <div className="d-flex align-items-center">
                    {/* <img src={Order} className="me-3 heading-icon"/> */}
                    {/* <i className="fa-solid fa-table me-3 fs-4 heading-icon"></i> */}
                    <h5 className='m-0 heading_board'>All Users</h5>
                </div>
            </div>
            <hr />
            <div className="account-box-design change_psw">
                <form className="d-flex align-items-center order-flex">
                    <Form.Group className="me-2 modal-form">
                        <Form.Control type="text" placeholder='Recipient Name' onChange={(e)=>handleFilterChange("name",e.target.value)}/>
                    </Form.Group>
                    <Form.Group className="me-2 modal-form">
                        <Form.Control type="email" placeholder='Recipient Email' onChange={(e)=>handleFilterChange("email",e.target.value)}/>
                    </Form.Group>
                    <Form.Group className="me-2 modal-form">
                        <Form.Control type="date" onChange={(e)=>handleFilterChange("bod",e.target.value)}/>
                    </Form.Group>
                    <Form.Select aria-label="Default select example" className='modal-form me-2'>
                        <option>Status</option>
                        <option value="1">Status</option>
                        <option value="2">Scheduled</option>
                        <option value="3">Not Scheduled</option>
                        <option value="3">Delivered</option>
                    </Form.Select>
                    <Button type="button" className="home_btn me-2 wishboard_btn">Filter</Button>
                    <Button type="button" className="btn-secondary home_btn wishboard_btn">Cancel</Button>
                </form>
            </div>
            <div className='board_table mt-5'>
                <Table bordered responsive>
                    <thead className='table_header'>
                        <tr>
                            <th>No.</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>DOB</th>
                            <th>Marriage Status</th>
                            <th>Marriage Date</th>
                            <th className='text-end'>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            filteredData.length > 0 ? 
                            (
                                <>
                                {
                                    filteredData.map((elem,index) =>{
                                        return (
                                            <tr>
                                                <td>{index+1}</td>
                                                <td>{elem.firstname + " " + elem.lastname}</td>
                                                <td>{elem.email}</td>
                                                <td>{elem.bod}</td>
                                                <td>{elem.marriage_date === '' ? 'Unmerried' : 'Merried'}</td>
                                                <td>{elem.marriage_date}</td>
                                                <td>
                                                    <div className='action-row'>
                                                    <button className='action-btn edit' onClick={()=>handleEdit(elem)} ><FaIcons.FaEdit /></button>
                                                    <button className='action-btn delete' onClick={()=>handleDelete(elem.user_id)} ><FaIcons.FaTrash /></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        )
                                    })
                                }
                                </>
                            ):(
                                <tr>
                                    <td className='border-0'>
                                        {/* <EmptyState message="Records Not added" /> */}
                                    </td>
                                </tr>
                            ) 
                        }
                        
                    </tbody>
                </Table>
            </div>
            {
                isEdit&&(
<EditUser show={true} onHide={handleEdit} userData={userData} />
                )
            }
            
        </>
    )
}


export default UserList;