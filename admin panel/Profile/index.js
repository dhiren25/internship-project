import React, { useState, useEffect } from "react";
import Sidebar from "./Sidebar";
// import logo from "../../assets/img/logo.svg";
import UserProfile from './UserProfile';
import ChangePassword from "./ChangePassword";
import DeleteAccount from "./DeleteAccount";
import WishboardOrder from "./WishboardOrder";
import WishboardReceive from "./WishboardReceive";
import UserList from "./UserList";
import AddUser from "./AddUser";
import { useDispatch } from "react-redux";
// import { deleteAccount } from "../../actions";

const Profile = () => {
    const [isActive, setIsActive] = useState(true);
    const [CardStep, setCardStep] = useState("userprofile");
    const dispatch = useDispatch();
    const handleToggle = () => {
        setIsActive(!isActive);
    };
    const sidebarHandler = (menu) => {
        setCardStep(menu);
    };

    useEffect(() => {
        if (isActive) {
            document.querySelector("body").classList.remove("Sidebar_Active");
        } else {
            document.querySelector("body").classList.add("Sidebar_Active");
        }
    }, [isActive]);


    const CardStepItems = (props) => {
        console.log(props.cardTabs);
        switch (props.cardTabs) {
            case "userprofile":
                return <UserProfile/>;
            case "changepassword":
                return <ChangePassword/>;
            // case "deleteaccount":
            //     {
            //         dispatch(deleteAccount())
            //     }
            case "wishboardOrder":
                return <WishboardOrder/>;
            case "wishboardreceive":
                return <WishboardReceive/>;
            // case "grouporder":
            //     return <GroupOrder/>;
            // case "groupreceive":
            //     return <GroupReceive/>;
            case "adduser":
                return <AddUser />;
            case "userlist":
                return <UserList />;
            default:
                return null;
        }
    };

    return (
        <>
            <div className="wrapper">
                <div className="section">
                    <div className="top_navbar">
                        <div className={`hamburger ${isActive ? "active" : ""}`} onClick={handleToggle}>
                            {/* <a href="/"><img src={logo} alt="Egroup Greetings" /></a> */}
                            <a href="#">
                                <i className="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div className="content-wrapper">
                        <CardStepItems cardTabs={CardStep}></CardStepItems>
                    </div>
                </div>
                <Sidebar sidebarHandler={sidebarHandler} ishow={isActive} />
            </div>
        </>
    );
};

export default Profile;
