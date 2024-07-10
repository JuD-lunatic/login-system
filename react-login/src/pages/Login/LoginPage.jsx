import { useState } from "react";
import { Link, useNavigate } from "react-router-dom";
import axios from "axios";
import "./LoginPage.css";

function LoginPage() {
    const navigate = useNavigate();
    const [name, setName] = useState("");
    const [password, setPassword] = useState("");
    const [error, setError] = useState("");

    const handleLogin = async (e) => {
        e.preventDefault();
        try {
            const response = await axios.post(
                "http://localhost:8000/login",
                {
                    name,
                    password,
                },
                {
                    headers: {
                        "Content-Type": "application/json",
                    },
                    withCredentials: true,
                }
            );

            const { role } = response.data;
            console.log("Login response:", response.data);

            if (role === "student") {
                navigate("/student/dashboard");
            } else if (role === "college_poc") {
                navigate("/collegepoc/dashboard");
            } else if (role === "poc_head") {
                navigate("/pochead/dashboard");
            } else {
                setError("Invalid role");
            }
        } catch (error) {
            console.error("Login error:", error);
            setError("Invalid credentials");
        }
    };

    return (
        <div className="login-page">
            <div className="logos">
                <div className="unc-logo" />
                <div className="eie-logo" />
            </div>
            <div className="title">
                <h5>EIE Management System</h5>
            </div>

            <div className="contents">
                <form className="login-form" onSubmit={handleLogin}>
                    <div className="input-group">
                        <label htmlFor="username">Username:</label>
                        <input
                            type="text"
                            id="username"
                            placeholder="Username"
                            value={name}
                            onChange={(e) => setName(e.target.value)}
                        />
                    </div>
                    <div className="input-group">
                        <label htmlFor="password">Password:</label>
                        <input
                            type="password"
                            id="password"
                            placeholder="Password"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                        />
                    </div>
                    <button type="submit" className="login-button">
                        Login
                    </button>
                </form>
            </div>
            <div className="footer">
                {error && <p className="error">{error}</p>}
                <Link to="/forgot-password" className="forgot-password">
                    Forgot Password?
                </Link>
            </div>
        </div>
    );
}

export default LoginPage;
