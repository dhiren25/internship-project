import React, { useState } from "react";
// import styled from "styled-components";  
import { Link } from "react-router-dom";
import { IconContext } from "react-icons/lib";
import * as FaIcons from "react-icons/fa";
import * as AiIcons from "react-icons/ai";
import * as IoIcons from "react-icons/io";
import * as RiIcons from "react-icons/ri";
// import logo from "../../assets/img/logo.svg";
import './index.css';

const SidebarLink =`
display: flex;
color: #e1e9fc;
justify-content: space-between;
align-items: center;
padding: 20px;
list-style: none;
height: 60px;
text-decoration: none;
font-size: 18px;
border-left: 4px solid transparent;

&:hover {
	background: #252831;
	border-left: 4px solid var(--secondary-clr);
	cursor: pointer;
}
`;

const SidebarLabel = `
margin-left: 16px;
font-size:17px;
`;

const DropdownLink = `
background: #252831;
height: 60px;
padding-left: 3rem;
display: flex;
align-items: center;
text-decoration: none;
color: #f5f5f5;
font-size: 18px;

&:hover {
	cursor: pointer;
}
`;

const SubMenu = ({ item, sidebarHandler }) => {
    const [subnav, setSubnav] = useState(false);

    const showSubnav = () => setSubnav(!subnav);
    return (
        <>
            <SidebarLink onClick={item.subNav && showSubnav}>
                <div>
                    {item.icon}
                    <SidebarLabel>{item.title}</SidebarLabel>
                </div>
                <div>
                    {item.subNav && subnav ? item.iconOpened : item.subNav ? item.iconClosed : null}
                </div>
            </SidebarLink>
            {subnav &&
                item.subNav.map((item, index) => {
                    return (
                        <DropdownLink onClick={() => sidebarHandler(item.path)} key={index}>
                            {item.icon}
                            <SidebarLabel>{item.title}</SidebarLabel>
                        </DropdownLink>
                    );
                })}
        </>
    );
};
export const SidebarData = [
    {
        title: "Group Card",
        path: "#",
        icon: <AiIcons.AiFillAccountBook />,
        iconClosed: <RiIcons.RiArrowDownSFill />,
        iconOpened: <RiIcons.RiArrowUpSFill />,
        subNav: [
            {
                title: "Group Card Orders",
                path: "grouporder",
                //icon: <IoIcons.IoIosPaper />,
            },
            {
                title: "Group Card Received",
                path: "groupreceive",
                // icon: <IoIcons.IoIosPaper />,
            },
        ],
    },
    {
        title: "Wish Board",
        path: "#",
        icon: <IoIcons.IoIosClipboard />,
        iconClosed: <RiIcons.RiArrowDownSFill />,
        iconOpened: <RiIcons.RiArrowUpSFill />,

        subNav: [
            {
                title: "Wish Board Orders",
                path: "wishboardOrder",
                //icon: <IoIcons.IoIosPaper />,
                cName: "sub-nav",
            },
            {
                title: "Wish Board Received",
                path: "wishboardreceive",
                //icon: <IoIcons.IoIosPaper />,
                cName: "sub-nav",
            },
        ],
    },
    {
        title: "Account Settings",
        path: "#",
        icon: <FaIcons.FaUser />,

        iconClosed: <RiIcons.RiArrowDownSFill />,
        iconOpened: <RiIcons.RiArrowUpSFill />,

        subNav: [
            {
                title: "Profile",
                path: "userprofile",
                //icon: <IoIcons.IoIosPaper />,
            },
            {
                title: "Change Password",
                path: "changepassword",
                //icon: <IoIcons.IoIosPaper />,
            },
            {
                title: "Delete Account",
                path: "deleteaccount",
                // icon: <IoIcons.IoIosPaper />,
            },
        ],
    },
    {
        title: "User",
        path: "#",
        icon: <FaIcons.FaUser />,

        iconClosed: <RiIcons.RiArrowDownSFill />,
        iconOpened: <RiIcons.RiArrowUpSFill />,

        subNav: [
            {
                title: "All users",
                path: "userlist",
            },
            {
                title: "Add user",
                path: "adduser",
            },
            {
                title: "User List",
                path: "userlist",
            },
        ],
    },
    {
        title: "Logout",
        path: "/home",
        icon: <FaIcons.FaLock />,
    },
];

const SidebarLogo = `
margin-left: 2rem;
font-size: 2rem;
height: 80px;
display: flex;
justify-content: flex-start;
align-items: center;
`;

const SidebarNav = `
background: #15171c;
width: 300px;
height: 100vh;
display: flex;
justify-content: center;
position: fixed;
top: 0;
left: 0;
transition: all 0.5s ease;
z-index: 10;
padding: 30px 0;
transform: translateX(-100%);
`;

const SidebarWrap = `
width: 100%;
`;

const Sidebar = ({ sidebarHandler, ishow }) => {
    const [sidebar, setSidebar] = useState(false);

    const showSidebar = () => setSidebar(!sidebar);
    return (
        <>
            <IconContext.Provider value={{ color: "#fff" }}>
                <SidebarNav sidebar={sidebar} className={`profile_sidebar ${ishow ? 'Show' : ''}`}>
                    <SidebarWrap>
                        <SidebarLogo to="#">
                            {/* <img src={logo} alt="Egroup Greetings" /> */}
                        </SidebarLogo>
                        {SidebarData.map((item, index) => {
                            return <SubMenu sidebarHandler={sidebarHandler} item={item} key={index} />;
                        })}
                    </SidebarWrap>
                </SidebarNav>
            </IconContext.Provider>
        </>
    );
};

export default Sidebar;
