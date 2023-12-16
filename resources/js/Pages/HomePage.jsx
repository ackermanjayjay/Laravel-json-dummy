import { Link, Head } from "@inertiajs/react";

const HomePage = (props) => {
    return (
        <div
            className="justify-content: flex-start;">
            <Head title={props.title}></Head>
            <h1>{props.name}</h1>
        </div>
    );
};
export default HomePage;
