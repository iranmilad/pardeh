import { useState, useMemo } from "preact/hooks";
import { usePagination, useSetState } from "@mantine/hooks";
import toastr from "toastr";
import queryString from "query-string";

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

export const CategoryPagination = ({ total, value, onChange }) => {
    let [page, setPage] = useState(value);
    const pagination = usePagination({ total, page, onChange: setPage });
    async function change(page) {
        try {
            await onChange(page);
            await pagination.setPage(page);
        } catch (error) {
            toastr.error("خطا در ارتباط با سرور");
        }
    }

    async function next() {
        try {
            await onChange(
                pagination.active < total
                    ? pagination.active + 1
                    : total
            );
            await pagination.next();
        } catch (error) {
            toastr.error("خطا در ارتباط با سرور");
        }
    }

    async function previous() {
        try {
            await onChange(pagination.active > 1 ? pagination.active - 1 : 1);
            await pagination.previous();
        } catch (error) {
            toastr.error("خطا در ارتباط با سرور");
        }
    }

    return (
        <nav className="cs-pagination mt-5 tw-w-max tw-mx-auto">
            <button
                disabled={pagination.active === 1}
                onClick={() => previous()}
            >
                <i className="fa-solid fa-chevron-right"></i>
            </button>
            {pagination.range.map((page) => (
                <>
                    {page === pagination.active ? (
                        <span>{page}</span>
                    ) : (
                        <>
                            {page === "dots" ? (
                                <span className="dots">...</span>
                            ) : (
                                <a onClick={() => change(page)}>{page}</a>
                            )}
                        </>
                    )}
                </>
            ))}
            <button
                disabled={pagination.active === total}
                onClick={() => next()}
            >
                <i className="fa-solid fa-chevron-left"></i>
            </button>
        </nav>
    );
};

export const RemoveOptionCategory = ({ options,onChange }) => {
    async function removeOption(item) {
        // Remove the option
        let newUrl = new URL(item.url);
        try{
            await onChange(queryString.parse(newUrl.search),item?.item);
        }
        catch (error) {
        }
    }
    return (
        <>
            {options.map((item) => (
                <div class="tw-w-full tw-flex tw-items-center tw-justify-between tw-mt-2">
                    <span class="tw-text-sm tw-text-gray-600 hover:tw-text-brand-500 tw-cursor-pointer" onClick={() => removeOption(item)}>
                        {item.title}
                    </span>
                    <button
                        type="button"
                        className="btn tw-p-0"
                        onClick={() => removeOption(item)}
                    >
                        <i class="fa-solid fa-xmark tw-text-gray-600 hover:tw-text-brand-500 tw-cursor-pointer"></i>
                    </button>
                </div>
            ))}
        </>
    );
};

export const MiniCartBox = ({items,removeFunc,updateFunc}) => {
    function update(e,id,quantity){
        setTimeout(() => updateFunc(id,e.target.value,() => {
            e.target.value = item.quantity
         }),500)
    }
    return (
        <>
            {items.map(item => (
                    <div className="mini-cart-box">
                    <div className="tw-flex tw-items-center tw-justify-center tw-w-20 tw-h-20 tw-bg-gray-100 tw-rounded-xl tw-mr-3">
                        <img className="tw-w-full tw-h-full tw-block tw-rounded-xl tw-object-cover" src={item.img} alt="" />
                    </div>
                    <div className="tw-flex-1 tw-mr-2 tw-h-full">
                        <div className="tw-flex tw-items-start tw-flex-row tw-justify-between tw-h-full">
                            <div className="tw-h-full tw-flex tw-flex-col tw-items-start tw-flex-grow">
                                <h3 className="tw-text-sm tw-font-medium tw-mb-1">{item.name}</h3>
                                <div className="tw-flex tw-items-center">
                                    <span className="tw-text-gray-500 tw-text-sm">قیمت:</span>
                                    <span className="tw-text-gray-800 tw-text-sm">{item.total} <svg style="width: 16px; height: 16px; fill: var(--undefined);">
                                            <use xlinkHref="#toman"></use>
                                        </svg></span>
                                </div>
                            </div>
                            <div className="tw-flex tw-flex-col tw-items-end tw-justify-between tw-h-full">
                                <button className="btn remove-item" onClick={(e) => removeFunc(item.id,e.target)}><i className="fal fa-trash"></i></button>
                                <div className="product-counter-inner has-toast" data-max="2" data-min="1">
                                    <input value={item.quantity} className="item-counter basket-items border tw-text-left tw-rounded-md tw-text-gray-600" style="margin-left: 0;font-size: 1rem;"
                                     type="number" onChange={(e) => update(e,item.id,item.quantity)} />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ))}        
        </>
    )
}
