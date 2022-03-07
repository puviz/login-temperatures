import React from "react";

export default function List({ city, data }) {
    return (
        <div className="flex flex-col">
            <div className="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div className="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table className="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    className="px-6 py-6 border-b border-gray-200 bg-gray-50 text-left text-2xl leading-4 font-bold text-gray-500 tracking-wider"
                                    colSpan="3"
                                >
                                    {city}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {data &&
                                data.map((item, key) => (
                                    <tr
                                        key={key}
                                        className={
                                            key % 2 == 0
                                                ? "bg-white"
                                                : "bg-gray-50"
                                        }
                                    >
                                        <td className="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            {item.date}
                                        </td>
                                        <td className="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {`${item.celsius} °C`}
                                        </td>
                                        <td className="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {`${item.fahrenheit} °F`}
                                        </td>
                                    </tr>
                                ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    );
}
