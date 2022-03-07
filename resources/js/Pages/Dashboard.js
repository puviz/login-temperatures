import React, { useCallback, useEffect, useState } from "react";
import Authenticated from "@/Layouts/Authenticated";
import { Head } from "@inertiajs/inertia-react";
import List from "@/Components/List";
import Button from "@/Components/Button";

export default function Dashboard(props) {
    const [items, setItems] = useState([]);
    const [processing, setProcessing] = useState(false);

    const getTemperatureHistory = useCallback(() => {
        axios.get("api/temperature-history").then((res) => {
            setItems(res.data);
        });
    }, []);

    const sortTemperature = () => {
        let sortedItems = {};
        setProcessing(true);
        Object.keys(items).forEach(
            (key, idx) =>
                (sortedItems[key] = items[key].sort(
                    (a, b) => b.celsius - a.celsius
                ))
        );
        setItems(sortedItems);
        setProcessing(false);
    };

    useEffect(() => {
        getTemperatureHistory();
    }, []);

    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="overflow-hidden sm:rounded-lg p-6">
                        <div className="text-3xl pb-2 font-bold font-weight-bold text-gray-500 border-b-2 mb-5">
                            Login Temperatures
                        </div>
                        <div className="flex items-center justify-end mb-3">
                            <Button
                                className="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-3"
                                type="button"
                                onClick={sortTemperature}
                            >
                                Hottest First
                            </Button>
                            <Button
                                className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                type="button"
                                onClick={getTemperatureHistory}
                            >
                                Reset Order
                            </Button>
                        </div>
                        <div className="grid grid-cols-2 gap-16 justify-center">
                            {Object.keys(items).map((key, idx) => (
                                <List key={idx} city={key} data={items[key]} />
                            ))}
                        </div>
                    </div>
                </div>
            </div>
        </Authenticated>
    );
}
