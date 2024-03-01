import { useState } from "preact/hooks";

export const StarComponent = ({ dataStars, no_label, rateable }) => {
    const [hoveredStars, setHoveredStars] = useState(0);
    const numStars = parseInt(dataStars, 10);

    const handleStarHover = (starIndex) => {
        if (rateable) {
            setHoveredStars(starIndex);
        }
    };

    const handleStarLeave = () => {
        if (rateable) {
            setHoveredStars(0);
        }
    };

    const handleStarClick = (starIndex) => {
        if (rateable) {
            // Handle star click event here
        }
    };

    const renderStars = () => {
        const stars = [];

        for (let i = 1; i <= 5; i++) {
            const starClass =
                i <= (rateable ? hoveredStars : numStars)
                    ? "fa-solid fa-star"
                    : "fa-regular fa-star";
            stars.push(
                <i
                    key={i}
                    className={`fa ${starClass} tw-mx-0.5`}
                    onMouseEnter={() => handleStarHover(i)}
                    onMouseLeave={handleStarLeave}
                    onClick={() => handleStarClick(i)}
                ></i>
            );
        }

        return stars;
    };

    return (
        <div className="star-container tw-text-yellow-500 tw-text-sm">
            {renderStars()}{" "}
            {no_label ? <span className="tw-text-xs">{dataStars}</span> : null}
            {rateable ? (
                <input type="hidden" name="rate" value={hoveredStars} />
            ) : null}
        </div>
    );
};

export const BellProduct = () => {
    return (
        <div>
            <h4 class="text-center tw-text-brand-500">ناموجود</h4>
            <div class="text-center tw-text-sm">
                این کالا فعلا موجود نیست اما می‌توانید زنگوله را بزنید تا به محض
                موجود شدن، به شما خبر دهیم.
            </div>
            <div class="tw-w-full tw-flex tw-items-center tw-justify-center">
                <button class="btn custom-btn-primary btn-sm btn-block tw-rounded-xl tw-w-full mt-3 let-me-know">
                    <i class="fa-solid fa-bell tw-ml-2"></i>
                    خبرم کن
                </button>
            </div>
        </div>
    );
};

export const PriceProduct = (props) => {
    const { discount, time_delivery, regular_price, sale_price } = props;

    return (
        <>
            {discount && (
                <div className="tw-flex tw-items-center tw-text-sm tw-justify-between pb-4">
                    <span className="tw-text-gray-500">تخفیف : </span>
                    <span className="badge tw-bg-red-500 tw-rounded-full">
                        {discount}%
                    </span>
                </div>
            )}
            {time_delivery && (
                <div className="tw-flex tw-items-center tw-text-sm tw-justify-between tw-py-4 border-top">
                    <span className="tw-text-gray-500">زمان تحویل : </span>
                    <span>{time_delivery} روز</span>
                </div>
            )}
            <div className="tw-flex tw-items-center tw-text-sm tw-justify-between tw-py-4 border-top">
                {regular_price && (
                    <>
                        <span className="tw-text-gray-500">قیمت : </span>
                        <div className="tw-flex tw-flex-col tw-items-end">
                            <span>
                                {regular_price}
                                <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                    <use xlinkHref="#toman"></use>
                                </svg>
                            </span>
                            {sale_price && (
                                <span className="tw-text-xs tw-text-gray-400">
                                    {sale_price}
                                    <svg
                                        className="tw-fill-gray-400"
                                        style="width: 16px; height: 16px;"
                                    >
                                        <use xlinkHref="#toman"></use>
                                    </svg>
                                </span>
                            )}
                        </div>
                    </>
                )}
            </div>
        </>
    );
};
