import { Link, Head } from "@inertiajs/react";

const HomePage = (props) => {
    console.log("data = ", props.result);
    return (
        <>
            <Head title={props.title}></Head>
            {props.result ? props.result.map((item, i)=>{
                <div key={i}>
                <p>{item.title}</p>
                <p>{item.description}</p>
                <p>{item.category}</p>
                </div>
            }):<p>Data kosong bre</p>}
        </>
    );
};
export default HomePage;
