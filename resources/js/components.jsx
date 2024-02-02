export function ShowDetails(props) {
    let { name, img, price, discount, others } = props;
    return (
        <div className="tw-flex tw-items-start">
            <div className="tw-relative">
                <img className="tw-w-28 tw-h-28 tw-rounded-xl" src={img} />
                <span className="tw-absolute -tw-top-2 -tw-left-2 tw-w-max tw-rounded-md tw-text-white  tw-px-1 tw-bg-red-500">
                    88%
                </span>
            </div>
            <div className="tw-mr-5">
                <h5 className="tw-font-bold tw-text-lg tw-text-gray-800">
                    {name}
                </h5>
                <div className="tw-flex tw-flex-col tw-items-start tw-space-y-1">
                    <span
                        className={`${
                            discount
                                ? "tw-line-through tw-text-sm tw-text-gray-500"
                                : "tw-text-gray-800 tw-text-lg tw-font-bold"
                        }`}
                    >
                        {price}
                    </span>
                    {discount && (
                        <span className="tw-text-gray-800 tw-text-lg tw-font-bold">
                            {discount}
                        </span>
                    )}
                    <span className="tw-text-xs tw-text-gray-500">
                        <i class="fa-solid fa-star tw-text-yellow-500 tw-ml-2"></i>
                        4 امتیاز
                    </span>
                </div>
                {others && <div></div>}
            </div>
        </div>
    );
}

export const StarComponent = ({ dataStars ,no_label}) => {
    const renderStars = () => {
        const stars = [];
        const numStars = parseInt(dataStars, 10);

        for (let i = 1; i <= 5; i++) {
            const starClass = i <= numStars ? "fa-solid fa-star" : "fa-regular fa-star";
            stars.push(<i key={i} className={`fa ${starClass} tw-mx-0.5`}></i>);
        }

        return stars;
    };

    return <div className="star-container tw-text-yellow-500 tw-text-sm">{renderStars()} {no_label ? <span className="tw-text-xs">{dataStars}</span> : null}</div>;
};